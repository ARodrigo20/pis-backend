<?php

namespace App\Models\CotizacionProveedor;
use Illuminate\Database\Eloquent\Model;

class CotizacionProveedor extends Model
{
    protected  $table = 'cotizacion_proveedor';
    protected  $fillable = array(
                            'solcli_id',
                            'id_proy',
                            'id_cli',
                            'id_prov',
                            'cotprov_fec',
                            'cotprov_razsoc',
                            'cotprov_ruc',
                            'cotprov_tipdoc',
                            'cotprov_dir',
                            'cotprov_con',
                            'cotprov_ema',
                            'estado',
                            'estado_envio'
                        );
    protected  $primaryKey = "cotprov_id";

    protected $appends = ['cotizacion_detalle'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function getCotizacionDetalleAttribute()
    {
        return $this->cotizacion_detalle();
    }

    public function cotizacion_detalle()
    {
        return $this->hasMany('App\Models\CotizacionProveedor\CotizacionProveedorDetalle', 'cotprov_id');
    }

}
