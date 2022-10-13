<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbCurrentStaffStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_current_staff_status')->insert(["name_ru" => "Работает в данной организации", "name_kk" => "Осы ұйымда жұмыс істейді", "code" => "01"]);
        DB::table('rb_current_staff_status')->insert(["name_ru" => "Находится в декретном отпуске", "name_kk" => "Декреттік демалыста", "code" => "02"]);
        DB::table('rb_current_staff_status')->insert(["name_ru" => "Находится в отпуске по причине болезни", "name_kk" => "Ауру себебінен демалыста", "code" => "03"]);
        DB::table('rb_current_staff_status')->insert(["name_ru" => "Находится в армии", "name_kk" => "Әскерде", "code" => "04"]);
        DB::table('rb_current_staff_status')->insert(["name_ru" => "Находится в отпуске без сохранения заработной платы", "name_kk" => "Еңбек ақысы сақталмайтын демалыста", "code" => "05"]);
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
