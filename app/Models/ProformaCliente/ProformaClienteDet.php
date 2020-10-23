<?php

namespace App\Models\ProformaCliente;

use Illuminate\Database\Eloquent\Model;

class ProformaClienteDet extends Model
{
    protected $table = 'proforma_cliente_det';
    protected $fillable = array(
        'id_prof_det',
        'id_pro',
        'id_prod',
        'prof_det_can',
        'prof_det_pre_lis',
        'prof_det_imp',
        'prof_det_cos',
        'prof_det_tcos',
        'prof_det_com',
        'id_prov',
        'prof_prod_serv',
        'prof_des_prod', 
        'prof_can_prod');

    protected $primaryKey = 'id_prof_det';
    
    protected $appends = ['producto','proveedor'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    public function getProductoAttribute()
    {
        return $this->producto();
    }

    public function producto(){
        return $this->belongsTo('App\Models\Almacen\Producto', 'id_prod')->with(['unidad_medida']);
    }

    public function getProveedorAttribute()
    {
        return $this->proveedor();
    }

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedores\Proveedor', 'id_prov');
    }
}
