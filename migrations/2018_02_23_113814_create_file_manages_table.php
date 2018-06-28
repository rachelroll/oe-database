<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_manages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('url')->default('')->comment('文件地址');
            $table->string('name')->default('')->comment('文件名称');
            $table->string('comment')->default('')->comment('文件备注');

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
        Schema::dropIfExists('file_manages');
    }
}
