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

            $table->string('name')->default('')->comment('产品名称');
            $table->string('model')->default('')->comment('型号');
            $table->tinyInteger('cat_id')->default(0)->comment('分类ID');
            $table->tinyInteger('is_new')->default(0)->comment('是否新品 0:否 1:是');
            $table->tinyInteger('position')->default(0)->comment('产品在首页位置');
            $table->tinyInteger('sort')->default(0)->comment('产品排序');
            $table->tinyInteger('type')->default(0)->comment('产品级别 0:普通产品 1:主打产品 2:特色产品');
            $table->tinyInteger('enabled')->default(0)->comment('启用禁用 0:禁用 1:启用');
            $table->string('cover')->default('')->comment('产品封面图');
            $table->string('banner')->default('')->comment('产品Banner图');
            $table->string('imgs')->default('')->comment('产品细节图');
            $table->string('video_img')->default('')->comment('视频封面图');
            $table->string('video_mp4')->default('')->comment('视频mp4');
            $table->string('video_ogv')->default('')->comment('视频ogv');
            $table->string('video_webm')->default('')->comment('视频webm');
            $table->string('intro_title')->default('')->comment('简介');
            $table->text('intro')->comment('产品详情');
            $table->string('attr')->default('')->comment('产品属性');
            $table->integer('price')->default(0)->comment('价格(分)');
            $table->tinyInteger('rating')->default(0)->comment('推荐评级');



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
