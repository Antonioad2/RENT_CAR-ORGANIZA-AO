<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalImagesToCarsTable extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('interior_image')->nullable()->after('image');
            $table->string('lateral_image')->nullable()->after('interior_image');
            $table->string('exterior_image')->nullable()->after('lateral_image');
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn(['interior_image', 'lateral_image', 'exterior_image']);
        });
    }
}
