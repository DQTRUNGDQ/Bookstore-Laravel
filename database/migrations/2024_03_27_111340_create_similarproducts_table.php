<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('similarproducts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealtoday_id')->constrained()->onDelete('cascade');
            $table->namebook();
            $table->imgbook();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('similarproducts');
    }
}