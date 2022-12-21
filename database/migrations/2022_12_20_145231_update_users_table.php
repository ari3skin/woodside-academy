<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {

            //relationships
            $table->foreign("faculty_id")->references("id")->on("faculties");
            $table->foreign("course_id")->references("id")->on("courses");
            $table->foreign("parent_id")->references("id")->on("parents");
            $table->foreign("email")->references("email")->on("applications");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};