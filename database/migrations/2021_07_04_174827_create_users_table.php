<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->date('birth')->nullable();
            $table->enum('gender', ['M', 'F']);
            $table->string('postcode', 12)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('address_number', 10)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('district', 50)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('city', 50)->nullable();
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
        Schema::dropIfExists('users');
    }
}
