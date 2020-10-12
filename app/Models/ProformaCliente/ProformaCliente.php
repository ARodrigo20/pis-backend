<?php

namespace App\Models\ProformaCliente;

use Illuminate\Database\Eloquent\Model;
use App\Models\Proyecto\Proyecto;
use App\Models\Clientes\Cliente;
use App\Models\User;


class ProformaCliente extends Model
{
    protected $table = 'proforma_cliente';
    protected $fillable = array(
        'id_pro',
        'id_cli',
        'prof_fec',
        'prof_mon',
        'id_proy',
        'id_col',
        'solcli_id',
        'prof_cre',
        'prof_imp_ini',
        'prof_int',
        'prof_cuo',
        'prof_val',
        'prof_tie_ent',
        'prof_cos_dir',
        'prof_gas_ind',
        'prof_uti',
        'prof_bas_imp',
        'prof_igv',
        'prof_neto',                            
        'est_reg',
        'prof_fac',
        'prof_finan',
        'prof_val_cuo'

                        );
    protected $primaryKey = 'id_pro';

    protected $appends = ['proyecto','cliente','proformaClienteDetalles'];
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function proyecto(){
        return $this->belongsTo(Proyecto::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function  usuario(){
        return $this->belongsTo(User::class);
    }

    public function proformaClienteDetalles(){
        return $this->hasMany('App\Models\ProformaCliente\ProformaClienteDet', 'id_pro');
    }

    public function getProyectoAttribute()
    {
        return $this->proyecto();
    }

    public function getClienteAttribute()
    {
        return $this->cliente();
    }

    public function getProformaClienteDetallesAttribute()
    {
        return $this->proformaClienteDetalles();
    }
   
}
