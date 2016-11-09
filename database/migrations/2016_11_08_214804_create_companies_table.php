<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cnpj', 18)->unique();
            $table->string('razao_social');
            $table->string('telefone');
            $table->string('endereco');
        });
    }

    public function down()
    {
        Schema::drop('companies');
    }
}
