<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();


            $table->string('name',128);
            $table->string('slug',128)->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('description');
           

            $table->string('image',128)->nullable();

            $table->string('url',128);



            $table->timestamps();
        });

        Schema::table('projects', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
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
        Schema::dropIfExists('projects');
    }
}
