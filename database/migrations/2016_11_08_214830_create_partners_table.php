<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cpf', 14)->unique();
            $table->string('nome', 50);
            $table->string('email');
            $table->integer('company_id')->unsigned();

            $table->foreign('company_id')
                ->references('id')
                ->on('companies');
        });
    }

    public function down()
    {
        Schema::drop('partners');
    }
}
