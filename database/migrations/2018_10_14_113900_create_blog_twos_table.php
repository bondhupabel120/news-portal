<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_twos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('blog_two_title');
            $table->text('blog_two_short_description');
            $table->text('blog_two_long_description');
            $table->text('blog_two_image');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('blog_twos');
    }
}
