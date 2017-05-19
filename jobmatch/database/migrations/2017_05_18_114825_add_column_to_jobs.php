<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs',function($table){
            
            $table->string('skill4');
            $table->string('internest1');
            $table->string('internest2');
            $table->string('internest3');
            $table->string('internest4');
            $table->string('internest5');
            
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
