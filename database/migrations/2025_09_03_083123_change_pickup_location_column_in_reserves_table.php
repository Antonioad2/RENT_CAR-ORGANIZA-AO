<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePickupLocationColumnInReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Abordagem sem usar change() - mais segura para Laravel 7
        Schema::table('reserves', function (Blueprint $table) {
            // Remove a coluna existente
            $table->dropColumn('pickup_location');
        });
        
        // Adiciona um pequeno delay se necessário (opcional)
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recriar a coluna como nullable
            $table->string('pickup_location')->nullable()->after('car_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reserves', function (Blueprint $table) {
            // Remove a coluna nullable
            $table->dropColumn('pickup_location');
        });
        
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recria a coluna como NOT NULL (como era originalmente)
            $table->string('pickup_location')->after('car_id');
        });
    }
}
