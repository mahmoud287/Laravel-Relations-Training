<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('articels_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('articel_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();

            $table->unique('articel_id', 'tag_id');

            $table->foreign('articel_id')->references('id')->on('articels')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
