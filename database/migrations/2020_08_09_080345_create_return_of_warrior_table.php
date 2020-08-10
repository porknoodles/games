<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnOfWarriorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returnofwarrior', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->enum('category', ['quest', 'leveling_map', 'head_equipment', 'body_equipment', 'foot_equipment', 'hand_equipment', 'potions'])->index();
            $table->enum('level_range', ['0_10','11_20','21_30','31_40','41_50','51_60','61_70','71_80','81_90','91_100','101_110','111_120','121_130'])->index();
            $table->char('level', 10);
            $table->string('quest_name', 150)->index();
            $table->string('npc', 20)->index();
            $table->string('coordinate', 12);
            $table->string('town', 50)->index();
            $table->text('prerequisites')->charset('utf8');
            $table->char('remarks', 100);
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
        Schema::dropIfExists('returnofwarrior');
    }
}
