<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarproduct extends Migration
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
            $table->unsignedBigInteger('dealtoday_id');
            $table->timestamps();
            $table->string('namebook');
            $table->string('imgbook');
            // Tạo khóa ngoại
            $table->foreign('dealtoday_id')->references('id')->on('dealtoday')->onDelete('cascade');
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