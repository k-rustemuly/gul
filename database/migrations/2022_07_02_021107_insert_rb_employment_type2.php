<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbEmploymentType2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_employment_type')->insert(["name_ru" => "Совместитель", "name_kk" => "Қоса атқарушы", "parent_id" => "0", "is_have_child" => "1", "code" => "2"]);
        DB::table('rb_employment_type')->insert(["name_ru" => "Внутреннее совмещение", "name_kk" => "Ішкі қоса атқарушы", "parent_id" => "2", "is_have_child" => "0", "code" => "2.1"]);
        DB::table('rb_employment_type')->insert(["name_ru" => "Внешнее совмещение", "name_kk" => "Сыртқы қоса атқарушы", "parent_id" => "2", "is_have_child" => "0", "code" => "2.2"]);
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
