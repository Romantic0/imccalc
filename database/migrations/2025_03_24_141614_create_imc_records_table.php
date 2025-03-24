<?php

// database/migrations/xxxx_xx_xx_create_imc_records_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImcRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('imc_records', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('peso');
            $table->float('altura');
            $table->float('imc');
            $table->string('classificacao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imc_records');
    }
}
