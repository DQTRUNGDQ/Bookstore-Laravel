<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealtoday_id')->constrained()->onDelete('cascade');
            $table->string('issuingcompany');
            $table->string('versiontype');
            $table->string('publicationdate');
            $table->string('size')->nullable();
            $table->string('translator');
            $table->string('covertype');
            $table->string('pages');
            $table->string('language')->nullable();
            $table->string('publishingcompany');
            $table->string('titledescription');
            $table->string('description');
            $table->string('descriptionmore');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productdetails');
    }
}