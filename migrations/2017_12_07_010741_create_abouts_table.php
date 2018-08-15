<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('导航名称');
            $table->string('title_en')->default('')->comment('导航名称英文');

            $table->text('content')->nulable()->comment('具体内容');
            $table->text('content_en')->nulable()->comment('具体内容英文');

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
        Schema::dropIfExists('about_cats');
    }
}
