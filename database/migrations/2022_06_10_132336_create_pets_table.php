<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');;
            $table->foreignId('breed_id')->constrained('breeds')->onDelete('cascade');;

            $table->date('birth_date');
            $table->string('colour');
            $table->string('weight');
            $table->string('gender');

            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('cascade');;

            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
