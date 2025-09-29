<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStartDateColumnInReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reserves', function (Blueprint $table) {
            // Remove a coluna existente
            $table->dropColumn('start_date');
        });
        
        // Adiciona um pequeno delay se necessário (opcional)
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recriar a coluna como nullable
            $table->date('start_date')->nullable()->after('pickup_location');
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
            $table->dropColumn('start_date');
        });
        
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recria a coluna como NOT NULL (como era originalmente)
            $table->date('start_date')->after('pickup_location');
        });
    }
}
