<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbPosition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_position')->insert(["name_ru" => "Учитель", "name_kk" => "Мұғалім"]);
        DB::table('rb_position')->insert(["name_ru" => "Заместитель (методист)", "name_kk" => "Орынбасар (әдіскер)"]);
        DB::table('rb_position')->insert(["name_ru" => "Директор", "name_kk" => "Директор"]);
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
