<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaClienteDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_cliente_det', function (Blueprint $table) {
            $table->id('id_prof_det');
            $table->foreignId('id_pro')->nullable()->references('id_pro')->on('proforma_cliente');
            $table->foreignId('id_prod')->nullable()->references('id_prod')->on('producto');
            $table->float('prof_det_can')->nullable();
            $table->float('prof_det_pre_lis')->nullable();
            $table->float('prof_det_imp')->nullable();
            $table->float('prof_det_cos')->nullable();
            $table->float('prof_det_tcos')->nullable();
            $table->float('prof_det_com')->nullable();
            $table->foreignId('id_prov')->nullable()->references('id_prov')->on('proveedor');
            $table->integer('prof_prod_serv')->nullable();
            $table->string('prof_des_prod', 200)->nullable();
            $table->float('prof_can_prod')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proforma_cliente_det');
    }
}
