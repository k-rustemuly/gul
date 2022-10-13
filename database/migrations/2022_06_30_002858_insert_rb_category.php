<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_category')->insert(["name_ru" => "Без категории", "name_kk" => "Санаты жоқ", "code" => "4"]);
        DB::table('rb_category')->insert(["name_ru" => "Высшая категория", "name_kk" => "Жоғары санатты", "code" => "1"]);
        DB::table('rb_category')->insert(["name_ru" => "Первая категория", "name_kk" => "Бірінші санатты", "code" => "2"]);
        DB::table('rb_category')->insert(["name_ru" => "Вторая категория", "name_kk" => "Екінші санатты", "code" => "3"]);
        DB::table('rb_category')->insert(["name_ru" => "Педагог", "name_kk" => "Педагог", "code" => "31"]);
        DB::table('rb_category')->insert(["name_ru" => "Педагог-модератор", "name_kk" => "Педагог-модератор", "code" => "32"]);
        DB::table('rb_category')->insert(["name_ru" => "Педагог-эксперт", "name_kk" => "Педагог -сарапшы", "code" => "33"]);
        DB::table('rb_category')->insert(["name_ru" => "Педагог-исследователь", "name_kk" => "Педагог-зерттеуші", "code" => "34"]);
        DB::table('rb_category')->insert(["name_ru" => "Педагог-мастер", "name_kk" => "Педагог-шебер", "code" => "35"]);
        DB::table('rb_category')->insert(["name_ru" => "Модератор НИШ", "name_kk" => "НЗМ модераторы", "code" => "5"]);
        DB::table('rb_category')->insert(["name_ru" => "Учитель НИШ", "name_kk" => "НЗМ мұғалімі", "code" => "6"]);
        DB::table('rb_category')->insert(["name_ru" => "Учитель-Стажер НИШ", "name_kk" => "НЗМ мұғалім-машықтанушы", "code" => "7"]);
        DB::table('rb_category')->insert(["name_ru" => "Эксперт НИШ", "name_kk" => "НЗМ сарапшы", "code" => "8"]);
        DB::table('rb_category')->insert(["name_ru" => "Мастер НИШ", "name_kk" => "НЗМ шебер", "code" => "9"]);
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
