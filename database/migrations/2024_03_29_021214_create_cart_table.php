<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('dealtoday_id');
            $table->unsignedBigInteger('product_id');
            $table->string('image');
            $table->string('name');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();

            // Thêm foreign key nếu cần
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('dealtoday_id')->references('dealtoday_id')->on('dealtoday')->onDelete('cascade');
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
        Schema::dropIfExists('cart');
    }
}