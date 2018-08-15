<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('enabled')->default(0)->comment('启用禁用 0:禁用 1:启用');
            $table->string('layout')->default('')->comment('每行几个产品,用竖线分隔,');
            $table->tinyInteger('sort')->default(0)->comment('分类排序');
            $table->string('name')->default('')->comment('分类名称');
            $table->string('name_en')->default('')->comment('分类名称英文');
            $table->text('intro')->nullable()->comment('分类简介');
            $table->text('intro_en')->nullable()->comment('分类简介英文');

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
        Schema::dropIfExists('categories');
    }
}
