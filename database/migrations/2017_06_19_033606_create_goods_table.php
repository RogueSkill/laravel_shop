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
            $table->increments('goods_id')->comment('主键');
            $table->tinyInteger('typeid')->comment('分类ID');
            $table->tinyInteger('goods_sn')->comment('商品货号');
            $table->string('goods_name')->comment('商品名称');
            $table->decimal('weight',8,2)->comment('重量(g)');
            $table->decimal('mareket_price',8,2)->comment('市场价格');
            $table->decimal('shop_price',8,2)->comment('商城价格');
            $table->decimal('cost_price',8,2)->comment('成本价格');
            $table->string('goods_remake')->comment('简单描述');
            $table->text('goods_content')->comment('描述内容');
            $table->string('original_img')->comment('原始图片');
            $table->tinyInteger('is_on_sale')->comment('是否上架');
            $table->tinyInteger('sort')->comment('排序');
            $table->tinyInteger('is_recommend')->comment('是否推荐');
            $table->tinyInteger('is_new')->comment('新品');
            $table->tinyInteger('is_hot')->comment('热卖');
            $table->Integer('store_count')->comment('库存');
            $table->Integer('sales_num')->comment('商品销量');
            $table->Integer('click_num')->comment('点击量');
            $table->tinyInteger('prom_type')->comment('0 普通订单,1 限时抢购, 2 团购 , 3 促销优惠,4预售');
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
