<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('item_name');
            $table->integer('item_model')->nullable();
            $table->string('cycle_no')->nullable();
            $table->string('fraim_no');
            $table->string('color');
            $table->integer('type')->nullable();
            $table->integer('l_type');
            $table->string('ext_date');
            $table->string('purchases_date');
            $table->integer('purchases_amount');

            $table->integer('servece_shop')->nullable();
            $table->integer('sale_amount')->nullable();

            $table->string('sale_customer');
            $table->string('sale_customer_phone')->nullable();
            $table->string('sale_customer_address')->nullable();
            
            $table->integer('sale_user_id')->nullable();
            
            $table->integer('buy_user_id');

            $table->string('buy_customer')->nullable();
            $table->string('buy_customer_phone')->nullable();
            $table->string('buy_customer_address')->nullable();
            
            $table->integer('buy_shop_id')->nullable();
            $table->integer('sale_shop_id')->nullable();
            
            $table->integer('credit')->nullable();
            
            $table->integer('buy_vr_no')->nullable();
            $table->integer('sale_vr_no')->nullable();

            $table->integer('sold_out')->nullable();

            $table->text('remark')->nullable();

            $table->integer('shop_id')->nullable();

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
