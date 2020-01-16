<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableHodAddAuth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hods',function (Blueprint $table){
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
            $table->string('email');
        });
        
        Schema::table('students',function (Blueprint $table){
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
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
