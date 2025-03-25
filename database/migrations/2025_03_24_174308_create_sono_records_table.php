<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSonoRecordsTable extends Migration
{
    public function up()
    {
        schema::Create('sono_records', function (Blueprint $table){
            $table->id();
            $table->integer('horas');
            $table->string('avaliacao');
            $table->integer('idade');
            $table->timestamps();
        });
    }

    public function down()
    {
        schema::dropIfExists('sono_records');
    }

}
