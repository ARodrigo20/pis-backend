<?php

namespace App\Models\CotizacionCliente;
use Illuminate\Database\Eloquent\Model;

class CotizacionCliente extends Model
{
    protected $table = 'solicitud_cotizacion_cliente';
    protected $fillable = array(
                            'solcli_cod',
                            'solcli_fec',
                            'id_proy',
                            'solcli_proy_nom',
                            'solcli_proy_cod',
                            'id_cli',
                            'solcli_cli_nom',
                            'solcli_cli_numdoc',
                            'solcli_cli_tipdoc',
                            'solcli_cli_dir',
                            'solcli_cli_con',
                            'id_col',
                            'solcli_col_nom',
                            'est_reg'
                        );
    protected $primaryKey = 'solcli_id';

    // protected $appends = ['tipo_documento', 'contactos', 'direcciones', 'proyectos'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    // public function getTipoDocumentoAttribute()
    // {
    //     return $this->tipo_documento();
    // }

    // public function tipo_documento()
    // {
    //     return $this->belongsTo('App\Models\Usuarios\TipoDocumento', 'id_tipdoc');
    // }

    // public function getContactosAttribute()
    // {
    //     return $this->contactos();
    // }

    // public function contactos()
    // {
    //     return $this->hasMany('App\Models\Clientes\ClienteContacto', 'id_cli')->where('est_reg', '!=', 'E');
    // }

    // public function getProyectosAttribute()
    // {
    //     return $this->proyectos();
    // }

    // public function proyectos()
    // {
    //     return $this->hasMany('App\Models\Proyecto\Proyecto', 'id_cli')->where('est_reg', '!=', 'E');
    // }

    // public function getDireccionesAttribute()
    // {
    //     return $this->direcciones();
    // }

    // public function direcciones()
    // {
    //     return $this->hasMany('App\Models\Clientes\ClienteDireccion', 'id_cli')->where('est_reg', '!=', 'E');
    // }

}
