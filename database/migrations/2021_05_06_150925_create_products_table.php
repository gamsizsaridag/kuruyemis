<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('price')->nullable();
            $table->double('discountedPrice')->nullable();
            $table->text('description')->nullable();
            $table->text('meta')->nullable();
            $table->text('keyword')->nullable();
            $table->integer('must')->nullable();
            $table->integer('categoryId')->nullable();
            $table->integer('brandId')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->enum('homeStatus',[0,1])->default(1);
            $table->enum('status',[0,1])->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
