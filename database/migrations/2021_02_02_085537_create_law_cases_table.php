<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_cases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('number');
            $table->string('citation');
            $table->string('court');
            $table->string('law')->nullable();
            $table->string('judges');
            $table->date('judgementdate');
            $table->string('file_location');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('law_cases');
    }
}
