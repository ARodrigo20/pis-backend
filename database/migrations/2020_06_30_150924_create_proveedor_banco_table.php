<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorBancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_banco', function (Blueprint $table) {
            $table->id('id_prov_ban');
            $table->string('tip_prov_ban', 100);
            $table->string('cue_prov_ban', 200);
            $table->string('ban_prov_ban', 200);
            $table->foreignId('id_prov')->nullable()->references('id_prov')->on('proveedor');
            $table->string('com_prov_ban', 200);
            $table->char('est_reg', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor_banco');
    }
}
