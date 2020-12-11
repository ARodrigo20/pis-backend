<?php

namespace App\Models\Facturacion;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';
    protected $fillable = array(
        'id_factura',
        'tipoDoc',
        'serie',
        'correlativo',
        'fechaEmision',
        'solcli_id',
        'id_cli',
        'id_emp',
        'tipoMoneda',
        'sumOtrosCargos',
        'mtoOperGravadas',
        'mtoOperInafectas',
        'mtoOperExoneradas',
        'mtoOperExportacion',
        'mtoIGV',
        'mtoISC',
        'mtoOtrosTributos',
        'icbper',
        'mtoImpVenta',
        'id_legends',
        'id_guias',
        'id_relDocs',
        'observacion',
        'compra',
        'mtoBaseIsc',
        'mtoBaseOth',
        'totalImpuestos',
        'ublVersion',
        'tipoOperacion',
        'fecVencimiento',
        'sumDsctoGlobal',
        'mtoDescuentos',
        'mtoOperGratuitas',
        'totalAnticipos',
        'id_guiaEmbebida',
        'id_seller',
        'id_direccion_entrega',
        'descuentos',
        'id_cargo',
        'mtoCargos',
        'valorVenta',
        'observaciones',
        'est_reg',
        'est_env',

    );
    protected $primaryKey = 'id_factura';

    protected $appends = ['cliente', 'empresa', 'solicitud_cotizacion_cliente'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
