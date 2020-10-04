<?php

namespace App\Models\CotizacionProveedor;
use Illuminate\Database\Eloquent\Model;

class CotizacionProveedorDetalle extends Model
{
    protected $table = 'cotizacion_proveedor_det';
    protected $fillable = array(
                            'cotprovdet_cant',
                            'cotprovdet_desc',
                            'cotprov_id',
                            'id_prod'
    );
    protected $primaryKey = 'cotprovdet_id';
    public $timestamps = false;
}
