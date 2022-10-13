<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbBranchFileType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('rb_branch_file_type')->insert(["name_ru"=> "Копия санитарно-эпидемиологического заключения", "name_kk"=> "Санитариялық-эпидемиологиялық қорытындының көшірмесі"]);
        DB::table('rb_branch_file_type')->insert(["name_ru"=> "Копия правоустанавливающих документов на недвижимое имущество либо копия договора аренды", "name_kk"=> "Жылжымайтын мүлікке құқық белгілейтін құжаттардың көшірмесі немесе жалдау шартының көшірмесі"]);
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
