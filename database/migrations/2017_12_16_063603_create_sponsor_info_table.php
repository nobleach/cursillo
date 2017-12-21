<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_info', function (Blueprint $table) {
            $table->increments('id');
          //   $table->primary('id');
            $table->text('fullname');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('zip');
            $table->text('email');
            $table->text('phone');
            $table->text('bestcalltime');
            $table->text('applicantname');
            $table->boolean('baptizedlutheran');
            $table->boolean('hadcursillospousediscussion');
            $table->boolean('bothspousesattending');
            $table->text('singlespouseexplanation');
            $table->text('cursilloattitude');
            $table->text('plantosupport');
            $table->text('otherapplicantinfo');
            $table->text('goodcandidatereason');
            $table->text('applicantexpectations');
            $table->boolean('signed');
            $table->date('datesigned');
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
        Schema::dropIfExists('sponsor_info');
    }
}
