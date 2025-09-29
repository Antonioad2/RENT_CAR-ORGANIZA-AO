<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTotalAmountColumnInReservesTable extends Migration
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
            $table->dropColumn('total_amount');
        });
        
        // Adiciona um pequeno delay se necessário (opcional)
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recriar a coluna como nullable
            $table->decimal('total_amount', 10, 2)->nullable()->after('end_date');
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
            $table->dropColumn('total_amount', 10, 2);
        });
        
        sleep(1);
        
        Schema::table('reserves', function (Blueprint $table) {
            // Recria a coluna como NOT NULL (como era originalmente)
            $table->decimal('total_amount')->after('end_date');
        });
    }
}
