<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_document_type')->comment('Id del tipo de Documento');
            $table->bigInteger('document')->unique();
            $table->string('commercial_name',140); 
            $table->string('business_name',140);
            $table->string('address',100);
            $table->integer('phone_number'); 

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
        Schema::dropIfExists('customers');
    }
}
