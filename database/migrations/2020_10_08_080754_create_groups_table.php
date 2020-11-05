<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name');
            $table->string('group_title');
            $table->string('group_course');
            $table->string('acces_code');
            $table->string('adviser')->default('no-adviser');
            $table->tinyInteger('members')->default(1);
            $table->tinyInteger('capstone')->default(1);
            $table->string('defense_standing')->nullable();
            $table->string('group_percent')->default('0');
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
        Schema::dropIfExists('groups');
    }
}
