<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVivregistrationemployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vivregistrationemployee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('employee_code');
            $table->date('updated_date');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_vivregistrationemployee');
    }
}
