<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_type');
            $table->integer('document')->unique();
            $table->string('first_name'); 
            $table->string('last_name');
            $table->string('address');
            $table->integer('phone_number');
            $table->integer('mobile_number');
            $table->unsignedInteger('id_type_purchase')->comment('Id de tipo de compra de la tabla tipos de compra');            
            $table->timestamps();
            $table->engine    = 'MyIsam';
            $table->charset   = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclators');
    }
}
