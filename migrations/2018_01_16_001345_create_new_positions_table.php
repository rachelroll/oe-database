<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_positions', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('enabled')->default(0)->comment('启用禁用');
            $table->string('layout')->default('')->comment('每行几个产品,用竖线分隔,');

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
        Schema::dropIfExists('new_positions');
    }
}
