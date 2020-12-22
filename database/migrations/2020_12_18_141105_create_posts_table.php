<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
           
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();

            $table->string('name',128);
            $table->string('slug',128)->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('description');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');

            $table->string('file',128)->nullable();

            $table->timestamps();

            //Relation
        });

        Schema::table('posts', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('estado_id')->references('id')->on('estados')
                ->onUpdate('cascade');
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
