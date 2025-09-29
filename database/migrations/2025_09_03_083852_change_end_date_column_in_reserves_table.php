<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEndDateColumnInReservesTable extends Migration
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
            $table->dropColumn('end_date');
        });
        
        // Adiciona um pequeno delay se necessário (opcional)
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recriar a coluna como nullable
            $table->date('end_date')->nullable()->after('start_date');
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
            $table->dropColumn('end_date');
        });
        
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recria a coluna como NOT NULL (como era originalmente)
            $table->date('end_date')->after('start_date');
        });
    }
}
