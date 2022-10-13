<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_rate')->insert(["name_ru" => "0", "name_kk" => "0", "code" => "0"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,1", "name_kk" => "0,1", "code" => "01"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,2", "name_kk" => "0,2", "code" => "02"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,3", "name_kk" => "0,3", "code" => "03"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,4", "name_kk" => "0,4", "code" => "04"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,5", "name_kk" => "0,5", "code" => "05"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,6", "name_kk" => "0,6", "code" => "06"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,7", "name_kk" => "0,7", "code" => "07"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,8", "name_kk" => "0,8", "code" => "08"]);
        DB::table('rb_rate')->insert(["name_ru" => "0,9", "name_kk" => "0,9", "code" => "09"]);
        DB::table('rb_rate')->insert(["name_ru" => "1", "name_kk" => "1", "code" => "10"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,1", "name_kk" => "1,1", "code" => "11"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,2", "name_kk" => "1,2", "code" => "12"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,3", "name_kk" => "1,3", "code" => "13"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,4", "name_kk" => "1,4", "code" => "14"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,5", "name_kk" => "1,5", "code" => "15"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,6", "name_kk" => "1,6", "code" => "16"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,7", "name_kk" => "1,7", "code" => "17"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,8", "name_kk" => "1,8", "code" => "18"]);
        DB::table('rb_rate')->insert(["name_ru" => "1,9", "name_kk" => "1,9", "code" => "19"]);
        DB::table('rb_rate')->insert(["name_ru" => "2", "name_kk" => "2", "code" => "20"]);
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
