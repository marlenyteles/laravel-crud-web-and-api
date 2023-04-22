<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->string('descripcion',150);
		$table->string('estado',1)->default('P');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
