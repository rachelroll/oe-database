<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('enabled')->default(0)->comment('启用禁用 0禁用 1启用');
            $table->tinyInteger('sort')->default(0)->comment('排序');
            $table->string('title')->default('')->comment('轮播图名称');
            $table->string('img')->default('')->comment('图片');
            $table->string('intro')->default('')->comment('简单描述');
            $table->string('url')->default('')->comment('跳转地址');
            $table->string('target')->default('_blank')->comment('打开方式');
            $table->string('remark')->default('')->comment('备注');

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
        Schema::drop('carousels');
    }
}
