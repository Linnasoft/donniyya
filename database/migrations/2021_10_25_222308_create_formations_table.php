<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('teacher_id');
            $table->string('formation_type');
            $table->bigInteger('formation_category');
            $table->string('formation_title');
            $table->double('formation_price');
            $table->integer('formation_max_students');
            $table->string('formation_cetificate');
            $table->text('formation_description');
            $table->text('formation_requirements')->nullable();
            $table->text('formation_localisation');
            $table->text('formation_address');
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
        Schema::dropIfExists('formations');
    }
}
