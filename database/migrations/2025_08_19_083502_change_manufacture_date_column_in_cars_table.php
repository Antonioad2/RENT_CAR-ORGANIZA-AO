<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeManufactureDateColumnInCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('manufacture_date'); // Remove a coluna antiga
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedSmallInteger('manufacture_date')->after('fuel_id'); // Adiciona o novo campo como ano
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('manufacture_date'); // Remove o inteiro
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->date('manufacture_date')->after('fuel_id'); // Restaura como data
        });
    }
}
