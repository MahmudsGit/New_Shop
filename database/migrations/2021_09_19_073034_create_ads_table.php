<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('main_ad');
            $table->integer('off_percent');
            $table->text('main_image');
            $table->string('seceondary_ad');
            $table->text('secondary_image');
            $table->string('third_ad');
            $table->text('third_image');
            $table->string('fourth_ad');
            $table->text('fourth_image');
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
        Schema::dropIfExists('ads');
    }
}
