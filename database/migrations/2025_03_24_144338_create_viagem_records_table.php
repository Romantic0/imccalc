<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;




class CreateViagemRecordsTable extends Migration
{
    public function up()
    {
        schema::Create('viagem_records', function (Blueprint $table){
            $table->id();
            $table->float('distancia');
            $table->float('preco_gasolina');
            $table->float('consumo_veiculo');
            $table->float('gasto');
            $table->timestamps();
        });
    }

    public function down()
    {
        schema::dropIfExists('viagem_records');
    }

}
