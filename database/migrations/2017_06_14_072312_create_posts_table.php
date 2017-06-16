<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title', 255);
			$table->string('seotitle', 255);
			$table->string('author');
			$table->text('content');
			$table->string('image', 255)->default('noimage.jpg');
			$table->integer('hits')->default('0');
			$table->enum('headline', ['Y','N'])->default('N');
			$table->enum('active', ['Y','N'])->default('Y');
			$table->enum('status', ['publish','draft'])->default('publish');
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
        Schema::dropIfExists('posts');
    }
}
