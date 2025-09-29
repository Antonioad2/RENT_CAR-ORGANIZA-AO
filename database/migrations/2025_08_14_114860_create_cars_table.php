<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->softdeletes();
            $table->string('chassi')->unique();
            $table->enum ('category', ['Luxury', 'Standard', 'Economy'])->default('Standard');
            $table->foreignId('models_id')->constrained('models')->onDelete('cascade');
            $table->foreignId('color_id')->constrained('colors')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('fuel_id')->constrained('fuels')->onDelete('cascade');
            $table->foreignId('supplier_id')->nullable()->constrained('suppliers')->onDelete('cascade');
            $table->integer('mileage')->nullable();
            $table->integer('number_of_doors')->nullable();
            $table->integer('number_of_seats')->nullable();
            $table->string('engine')->nullable();
            $table->enum('transmission', ['Manual', 'Automático'])->default('Manual');
            $table->date('manufacture_date');
            $table->date('registration_date');
            $table->string('observations')->nullable();
            $table->string('license_plate')->unique();
            $table->string('image')->nullable();
            $table->string('car_insurance')->nullable();
            $table->string('car_insurance_upload')->nullable();
            $table->string('car_document')->nullable();
            $table->string('car_document_upload')->nullable();
            $table->date('inspection_date')->nullable();
            $table->string('inspection_document_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
