<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            
           
            $table->enum('name',['ADMINISTRATOR','EDITOR','RECRUITER','DEVELOPER'])->default('EDITOR');
            $table->bigInteger('estado_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('roles', function($table) {
              
                
            $table->foreign('estado_id')->references('id')->on('estados')
                ->onUpdate('cascade');
        });

        //Relations
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
