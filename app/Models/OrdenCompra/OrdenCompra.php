<?php

namespace App\Models\OrdenCompra;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    protected $table = 'orden_compra';
    protected $fillable = array(
        'ord_com_cod',
        'cotprov_id',
        'id_emp',
        'ord_com_fec',
        'id_col',
        'ord_com_bas_imp',                     
        'ord_com_igv',
        'ord_com_tot',
        'id_pro',
        'ord_com_est',
        'est_env',
        'est_reg');
    protected $primaryKey = 'id_ord_com';

    protected $appends = ['orden_detalle'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function getOrdenDetalleAttribute()
    {
        return $this->orden_detalle();
    }

    public function orden_detalle()
    {
        return $this->hasMany('App\Models\OrdenCompra\OrdenCompraDet', 'id_ord_com');
    }

}
