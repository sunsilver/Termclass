<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            //user id 는 user 테이블에서 가져온 id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('title')->comment("게시글 제목");
            $table->string('content')->comment("게시글 내용");
            $table->string('hits')->default(0)->comment("조회수");
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
        Schema::dropIfExists('articles');
    }
}
