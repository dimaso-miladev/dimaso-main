<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade');
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('website_name', 255)->nullable();
            $table->string('website_url', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->char('sex', 1)->nullable()->comment('M, F, O');            
            $table->mediumText('profile_text')->nullable()->comment('Description profile');
            $table->char('view_status', 1)->nullable()->default('1')->comment('Active or Deative');
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
        Schema::dropIfExists('profiles');
    }
}
