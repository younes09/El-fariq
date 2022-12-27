<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_2_name');$table->string('player_2_familyname');$table->string('photo_p2');
            $table->string('player_3_name');$table->string('player_3_familyname');$table->string('photo_p3');
            $table->string('player_4_name');$table->string('player_4_familyname');$table->string('photo_p4');
            $table->string('player_5_name');$table->string('player_5_familyname');$table->string('photo_p5');
            $table->string('player_6_name');$table->string('player_6_familyname');$table->string('photo_p6');
            $table->string('player_7_name');$table->string('player_7_familyname');$table->string('photo_p7');
            $table->string('player_8_name');$table->string('player_8_familyname');$table->string('photo_p8');
            $table->foreignId('team_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('players');
    }
}
