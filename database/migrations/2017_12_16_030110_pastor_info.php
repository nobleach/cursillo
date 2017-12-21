<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PastorInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastor_info', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->text('fullname');
            $table->text('churchname');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('zip');
            $table->text('phone');
            $table->text('email');
            $table->text('goodcandidateexplanation');
            $table->boolean('signed');
            $table->text('date');
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
        Schema::dropIfExists('pastor_info');
    }
}
