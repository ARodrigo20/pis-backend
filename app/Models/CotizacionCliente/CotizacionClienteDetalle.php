<?php

namespace App\Models\CotizacionCliente;
use Illuminate\Database\Eloquent\Model;

class CotizacionClienteDetalle extends Model
{
    protected $table = 'solicitud_cotizacion_cliente_det';
    protected $fillable = array(
                            'solcli_id',
                            'solclidet_prod_serv',
                            'solclidet_des',
                            'id_prod',
                            'solclidet_prod_can',
                            'solclidet_prod_codint',
                            'solclidet_prod_numpar',
                            'solclidet_prod_fabr',
                            'solclidet_prod_marc',
                            'solclidet_prod_unimed',
                            'solclidet_prod_stock'
                        );
    protected $primaryKey = 'solclidet_id';
    public $timestamps = false;

    // protected $appends = ['tipo_documento', 'contactos', 'direcciones', 'proyectos'];
    // protected $hidden = [
    //     'created_at', 'updated_at',
    // ];

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
