<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->tinyInteger('typeid')->comment('分类ID');
            $table->string('goods')->comment('商品名称');
            $table->string('company')->comment('公司');
            $table->text('descr')->comment('简介');
            $table->double('price')->comment('价格');
            $table->string('picname')->comment('图片');
            $table->string('picname_m')->comment('中图');
            $table->string('picname_s')->comment('小图');

            $table->tinyInteger('state')->comment('状态');
            $table->Integer('store')->comment('库存');
            $table->Integer('num')->comment('销售量');
            $table->Integer('clicknum')->comment('点击量');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
