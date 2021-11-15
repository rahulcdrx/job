<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('email')->unique();
            $table->string('mobile_no')->unique();
            $table->string('aadhar_no')->unique();
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('transaction_no')->unique();
            $table->string('taluka');
            $table->date('dob');
            $table->string('gender');
          

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
        Schema::dropIfExists('registers');
    }
}
