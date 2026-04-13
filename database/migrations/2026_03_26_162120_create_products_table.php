<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('descriptionLong')->nullable();
            $table->float('price');
            $table->timestamps();

            //foreign key - relacion de 1 a 1
//            $table->integer('idcategory')->unsigned()->nullable();
  //          $table->foreign('idcategory')->references('id')->on('categories');
            $table->foreignId('idcategory')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
