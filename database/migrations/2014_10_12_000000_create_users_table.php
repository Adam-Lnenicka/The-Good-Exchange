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
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('phone_number')->nullable();
            $table->string('about')->nullable();
<<<<<<< HEAD
            $table->string('need_help')->nullable();
            $table->string('provide_help')->nullable();
=======
            $table->string('hopefuls_helpmates')->nullable();
            $table->string('service')->nullable();
>>>>>>> 435baccb28713ee36400f3f6d9cac1e02b4ac4a5

            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
            $table->unsignedInteger('handy_points')->nullable();
            $table->string('user_id')->nullable();
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
