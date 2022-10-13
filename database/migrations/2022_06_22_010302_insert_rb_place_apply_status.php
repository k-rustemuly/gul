<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbPlaceApplyStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_place_apply_status')->insert(['name_kk' => 'Жіберілді', 'name_ru' => 'Подано', 'color' => '#000000']);
        DB::table('rb_place_apply_status')->insert(['name_kk' => 'Мақұлданды', 'name_ru' => 'Одобрено', 'color' => '#000000']);
        DB::table('rb_place_apply_status')->insert(['name_kk' => 'Қабылданбады', 'name_ru' => 'Отказано', 'color' => '#000000']);
        DB::table('rb_place_apply_status')->insert(['name_kk' => 'Қайтарып алынды', 'name_ru' => 'Отозвано', 'color' => '#000000']);
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
}
