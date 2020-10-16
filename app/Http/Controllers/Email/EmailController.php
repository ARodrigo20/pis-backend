<?php

namespace App\Http\Controllers\Email;

use DateTime;
use Mail;
use Swift_Mailer;
use Swift_MailTransport;
use Swift_SmtpTransport;
use Swift_Message;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\LogsController;
use Symfony\Component\HttpFoundation\Response;
use App\Models\CotizacionCliente\CotizacionCliente;
use App\Models\CotizacionCliente\CotizacionClienteDetalle;
use App\Models\Empresa\Empresa;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Clientes\Cliente\ClienteRequest as ClienteRequest;
use App\Http\Requests\Clientes\Cliente\ClienteContactoDireccionRequest as ClienteContactoDireccionRequest;

/**
 * @group Emails
 * APIs para enviar correos
 */
class EmailController extends Controller
{

    /**
     * Enviar Email
     * 
     * Envia un correo (Usar Body-> form-data en Postman, FormData en Angular)
     *
     * @bodyParam  archivo blob Archivo adjunto.
     * @bodyParam  asunto string Asunto del correo.
     * @bodyParam  cc string Correo Adjunto (correo del usuario logueado).
     * @bodyParam  mensaje string Mensaje del correo.
     * @bodyParam  destinatario string required Correo destino.
     * 
     * @response {
     *    "resp": "Correo Enviado"
     * }
     */
    public function sendEmail(Request $request){
        $asunto = $request->input('asunto') ? $request->input('asunto') : "";
        $cc = $request->input('cc') ? $request->input('cc') : "";
        $mensaje = $request->input('mensaje') ? $request->input('mensaje') : "";
        $destinatario =$request->input('destinatario') ? $request->input('destinatario') : "";
        $archivo = $request->file('archivo');

        Mail::raw($mensaje, function ($message) use($asunto,$cc,$destinatario,$archivo) {
            $message->from(getenv("MAIL_USERNAME"),"NETWORK CONTROL");
            $message->subject($asunto);
            $message->to($destinatario)->cc($cc);
            if($archivo) {
                $message->attachData(file_get_contents($archivo), $archivo->getClientOriginalName(), [
                    'mime' => $archivo->extension(),
                ]);
                //$message->attachData(base64_encode($archivo), $archivo->getClientOriginalName(), ['mime'=> $archivo->extension()]);
                //$message->attachData($archivo, $archivo->getClientOriginalName());
            }
        });

        return response()->json([
            'resp' => 'Correo Enviado'
        ], 200, [], JSON_NUMERIC_CHECK);

    }

}
