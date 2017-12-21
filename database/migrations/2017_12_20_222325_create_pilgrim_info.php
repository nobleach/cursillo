<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilgrimInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
 {
     Schema::create('pilgrim_info', function (Blueprint $table) {
         $table->uuid('id');
         $table->text('firstname');
         $table->text('lastname');
         $table->text('address');
         $table->text('aptsuite');
         $table->text('city');
         $table->text('state');
         $table->text('zip');
         $table->text('phone');
         $table->text('bestcalltime');
         $table->text('email');
         $table->boolean('over18');
         $table->text('occupation');
         $table->text('tagname');
         $table->enum('maritalstatus', ['single', 'married', 'separated', 'divorced', 'widowed']);
         $table->text('marriagepartner');
         $table->text('homechurch');
         $table->text('homechurchcity');
         $table->text('homechurchpastor');
         $table->text('homechurchattendance');
         $table->text('specialneeds');
         $table->text('reasontoattend');
         $table->boolean('signed');
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
     Schema::dropIfExists('pilgrim_info');
 }
}
