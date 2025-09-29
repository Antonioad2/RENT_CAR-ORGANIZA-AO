<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('document_identification')->unique();
            $table->string('id_image')->unique();
            $table->string('license_image')->unique();
            $table->date('license_expiry_date');
            $table->string('phone_number');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('email')->unique();
            $table->integer('experience_years')->default(0);
            $table->string('address')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
