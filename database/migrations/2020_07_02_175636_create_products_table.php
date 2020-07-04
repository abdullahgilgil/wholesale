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
            $table->unsignedBigInteger('brand_id');
            $table->string('product_code')->nullable();
            $table->bigInteger('pack_barcode');
            $table->bigInteger('single_barcode');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->string('features')->nullable();
            $table->string('warnings')->nullable();
            $table->string('specifications')->nullable();
            $table->string('benefits')->nullable();
            $table->string('uses')->nullable();
            $table->string('tips')->nullable();
            $table->string('size');
            $table->string('type');
            $table->integer('vat_code');
            $table->decimal('cost_price',8,2)->nullable();
            $table->decimal('pack_price',8,2);
            $table->decimal('single_price',8,2)->nullable();
            $table->decimal('layer_price',8,2)->nullable();
            $table->decimal('pallet_price',8,2)->nullable();
            $table->integer('case_qty');
            $table->integer('layer_qty');
            $table->integer('pallet_qty');
            $table->integer('total_stock');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
