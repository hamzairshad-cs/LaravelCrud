<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
             $table->increments('Id'); //Cuz it is autom increment and primary key, no one can change the id even in update.
            $table->string('First_Name'); //because name is always in string
            $table->string('Last_Name'); //because lastname is always in string
            $table->unsignedInteger('Age'); //age is always in unsigned number
            $table->date('Date_Of_Birth'); //date should be in Date formatted form
            $table->string('st_email')->default('70070357@student.uol.edu.pk');   //if no email is input then default email should be enter      
           $table->timestamps(); //created at update at built in function
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
