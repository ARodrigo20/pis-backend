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
                            'id_prod',
                            'cotprovdet_prod_codint',
                            'cotprovdet_prod_numpar',
                            'cotprovdet_prod_fabr',
                            'cotprovdet_prod_marc',
                            'cotprovdet_prod_unimed'
    );
    protected $primaryKey = 'cotprovdet_id';
    public $timestamps = false;
    
}
