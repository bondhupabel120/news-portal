<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_ones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('blog_one_title');
            $table->text('blog_one_short_description');
            $table->text('blog_one_long_description');
            $table->text('blog_one_image');
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
        Schema::dropIfExists('blog_ones');
    }
}
