<?php

namespace App\Models\Proveedores;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
        protected $table = 'proveedor';
        protected $fillable = array(
                            'razsoc_prov',
                            'ema_prov',
                            'num_doc_prov',
                            'id_tipdoc',
                            'est_reg'
                        );
        protected $primaryKey = 'id_prov';

    	protected $appends = ['tipo_documento'];
	    protected $hidden = [
        	'created_at', 'updated_at',
    	];

		public function getTipoDocumentoAttribute()
	    {
	    	return $this->tipo_documento();
	    }

	    public function tipo_documento()
	    {
	    	return $this->belongsTo('App\Models\Usuarios\TipoDocumento', 'id_tipdoc');
	    }

}
