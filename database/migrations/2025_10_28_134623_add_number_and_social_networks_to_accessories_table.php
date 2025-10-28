<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberAndSocialNetworksToAccessoriesTable extends Migration
{
    public function up()
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->string('number')->nullable()->after('price'); // Número geral (ex: código, contato)
            $table->string('whatsapp', 20)->nullable()->after('number'); // Apenas número do WhatsApp (sem formatação)
        });
    }

    public function down()
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->dropColumn(['number', 'whatsapp']);
        });
    }
}
