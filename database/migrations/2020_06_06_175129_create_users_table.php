<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_col');
            $table->string('nom_col', 100)->nullable();
            $table->string('ape_col', 100)->nunable();
            $table->char('num_doc_col', 8)->nunable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cod_col')->nunable();
            $table->string('cel_col')->nunable();
            $table->foreignId('id_tipdoc')->nullable()->references('id_tipdoc')->on('tipo_documento');
            $table->foreignId('id_car')->nullable()->references('id_car')->on('cargo');
            $table->char('est_reg', 2);
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}