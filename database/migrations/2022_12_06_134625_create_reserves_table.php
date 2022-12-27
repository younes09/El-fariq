<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
            $table->string('reserve_1_name')->nullable();$table->string('reserve_1_familyname')->nullable();$table->string('photo_r1')->nullable();
            $table->string('reserve_2_name')->nullable();$table->string('reserve_2_familyname')->nullable();$table->string('photo_r2')->nullable();
            $table->string('reserve_3_name')->nullable();$table->string('reserve_3_familyname')->nullable();$table->string('photo_r3')->nullable();
            $table->string('reserve_4_name')->nullable();$table->string('reserve_4_familyname')->nullable();$table->string('photo_r4')->nullable();
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
        Schema::dropIfExists('reserves');
    }
}
