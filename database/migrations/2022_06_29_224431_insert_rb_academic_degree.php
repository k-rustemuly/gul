<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbAcademicDegree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_academic_degree')->insert(["name_ru" => "Без степени", "name_kk" => "Дәрежесі жоқ", "code" => "-1"]);
        DB::table('rb_academic_degree')->insert(["name_ru" => "Магистр", "name_kk" => "Магистр", "code" => "02"]);
        DB::table('rb_academic_degree')->insert(["name_ru" => "Кандидат наук", "name_kk" => "Ғылым кандидаты", "code" => "03"]);
        DB::table('rb_academic_degree')->insert(["name_ru" => "Доктор наук", "name_kk" => "Ғылымдар докторы", "code" => "04"]);
        DB::table('rb_academic_degree')->insert(["name_ru" => "Доктор PhD", "name_kk" => "PhD докторы", "code" => "05"]);
        DB::table('rb_academic_degree')->insert(["name_ru" => "Доктор по ориентации", "name_kk" => "Бағдар бойынша доктор", "code" => "06"]);

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
