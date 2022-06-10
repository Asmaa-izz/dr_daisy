<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ability_role', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained('roles')->cascadeOnDelete();
            $table->foreignId('ability_id')->constrained('abilities')->cascadeOnDelete();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('ability_role');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('abilities');
    }
}
