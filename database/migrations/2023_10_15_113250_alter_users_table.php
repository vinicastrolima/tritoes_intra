<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf')->unique();
            $table->string('phone_number');
            $table->enum('main_position', ['PG', 'SG', 'SF', 'PF', 'C']);
            $table->enum('secondary_position', ['PG', 'SG', 'SF', 'PF', 'C'])->nullable();
            $table->string('path_profile_picture')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        });
    }
}

