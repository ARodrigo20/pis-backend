<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_contacto', function (Blueprint $table) {
            $table->id('id_cli_con');
            $table->string('nom_cli_con', 200);
            $table->string('ema_cli_con', 100)->nullable();
            $table->char('tel_cli_con', 10);
            $table->foreignId('id_cli')->nullable()->references('id_cli')->on('cliente');
            $table->char('est_reg', 2)->default('A');
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
        Schema::dropIfExists('cliente_contacto');
    }
}
