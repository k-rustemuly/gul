<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user')->insert(["iin" => "960817350423", "full_name" => "Османов Қуаныш Рүстемұлы"]);
        DB::table('user')->insert(["iin" => "910911301992", "full_name" => "Әділханов Абылай Марксұлы"]);
        DB::table('user')->insert(["iin" => "123456789011", "full_name" => "Тестов Тест Тестович"]);
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
