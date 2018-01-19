<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feet', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->default('')->comment('Foot名称');
            $table->tinyInteger('enabled')->default(0)->comment('启用禁用 0:禁用 1:启用');
            $table->tinyInteger('cat_id')->default(0)->comment('分类ID');
            $table->tinyInteger('sort')->default(0)->comment('Foot排序');
            $table->text('info')->comment('详情');

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
        Schema::dropIfExists('feet');
    }
}
