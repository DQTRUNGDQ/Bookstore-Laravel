<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productdt_id');
            $table->unsignedBigInteger('product_id');
            $table->string('issuingcompany');
            $table->string('versiontype');
            $table->date('publicationdate');
            $table->string('size');
            $table->string('translator')->nullable();
            $table->string('covertype');
            $table->integer('pages');
            $table->string('language');
            $table->string('publishingcompany');
            $table->string('titledescription');
            $table->text('description');
            $table->text('descriptionmore')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}