<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTmpsTable extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('personal_access_tokens')) {
            Schema::create('users_tmp', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('surname');
                $table->string('email')->unique();
                $table->string('phone');
                $table->string('city');
                $table->string('municipality');
                $table->string('password');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tmp');
    }
}
