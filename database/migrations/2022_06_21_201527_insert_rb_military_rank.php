<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertRbMilitaryRank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::table('rb_military_rank')->insert(["id"=> 1,"name_ru"=> "состав солдат (матросов)","name_kk"=> "сарбаздар құрамы (матростар)","parent_id"=> 0,"is_have_child"=> 1,"code"=> 1]);
            DB::table('rb_military_rank')->insert(["id"=> 2,"name_ru"=> "рядовой","name_kk"=> "қатардағы жауынгер","parent_id"=> 1,"is_have_child"=> 0,"code"=> 1.01]);
            DB::table('rb_military_rank')->insert(["id"=> 3,"name_ru"=> "матрос","name_kk"=> "матрос","parent_id"=> 1,"is_have_child"=> 0,"code"=> 1.02]);
            DB::table('rb_military_rank')->insert(["id"=> 4,"name_ru"=> "ефрейтор","name_kk"=> "ефрейтор","parent_id"=> 1,"is_have_child"=> 0,"code"=> 1.03]);
            DB::table('rb_military_rank')->insert(["id"=> 5,"name_ru"=> "старший матрос","name_kk"=> "аға матрос","parent_id"=> 1,"is_have_child"=> 0,"code"=> 1.04]);
            DB::table('rb_military_rank')->insert(["id"=> 6,"name_ru"=> "состав сержантов (старшин)","name_kk"=> "сержанттар құрамы (старшиналар)","parent_id"=> 0,"is_have_child"=> 1,"code"=> 2]);
            DB::table('rb_military_rank')->insert(["id"=> 7,"name_ru"=> "младший сержантский состав","name_kk"=> "кіші сержанттық құрам","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.01]);
            DB::table('rb_military_rank')->insert(["id"=> 8,"name_ru"=> "младший сержант","name_kk"=> "кіші сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.02]);
            DB::table('rb_military_rank')->insert(["id"=> 9,"name_ru"=> "старшина второй статьи","name_kk"=> "екінші сатылы старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.03]);
            DB::table('rb_military_rank')->insert(["id"=> 10,"name_ru"=> "сержант","name_kk"=> "сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.04]);
            DB::table('rb_military_rank')->insert(["id"=> 11,"name_ru"=> "старшина первой статьи","name_kk"=> "бірінші сатылы старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.05]);
            DB::table('rb_military_rank')->insert(["id"=> 12,"name_ru"=> "старший сержант","name_kk"=> "аға сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.06]);
            DB::table('rb_military_rank')->insert(["id"=> 13,"name_ru"=> "главный старшина","name_kk"=> "бас старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.07]);
            DB::table('rb_military_rank')->insert(["id"=> 14,"name_ru"=> "старший сержантский состав","name_kk"=> "аға сержанттар құрамы","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.08]);
            DB::table('rb_military_rank')->insert(["id"=> 15,"name_ru"=> "сержант третьего класса","name_kk"=> "үшінші сыныпты сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.09]);
            DB::table('rb_military_rank')->insert(["id"=> 16,"name_ru"=> "старшина третьего класса","name_kk"=> "үшінші сыныпты старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.1]);
            DB::table('rb_military_rank')->insert(["id"=> 17,"name_ru"=> "сержант второго класса","name_kk"=> "екінші сыныпты сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.11]);
            DB::table('rb_military_rank')->insert(["id"=> 18,"name_ru"=> "старшина второго класса","name_kk"=> "екінші сыныпты старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.12]);
            DB::table('rb_military_rank')->insert(["id"=> 19,"name_ru"=> "сержант первого класса","name_kk"=> "бірінші сыныпты сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.13]);
            DB::table('rb_military_rank')->insert(["id"=> 20,"name_ru"=> "старшина первого класса","name_kk"=> "бірінші сыныпты старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.14]);
            DB::table('rb_military_rank')->insert(["id"=> 21,"name_ru"=> "высший сержантский состав","name_kk"=> "жоғары сержанттық құрам","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.15]);
            DB::table('rb_military_rank')->insert(["id"=> 22,"name_ru"=> "штаб-сержант","name_kk"=> "штаб-сержант","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.16]);
            DB::table('rb_military_rank')->insert(["id"=> 23,"name_ru"=> "штаб-старшина","name_kk"=> "штаб-старшина","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.17]);
            DB::table('rb_military_rank')->insert(["id"=> 24,"name_ru"=> "мастер-сержант","name_kk"=> "сержант-шебер","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.18]);
            DB::table('rb_military_rank')->insert(["id"=> 25,"name_ru"=> "мастер-старшина","name_kk"=> "старшина -шебер","parent_id"=> 6,"is_have_child"=> 0,"code"=> 2.19]);
            DB::table('rb_military_rank')->insert(["id"=> 26,"name_ru"=> "офицерский состав","name_kk"=> "офицерлік құрам","parent_id"=> 0,"is_have_child"=> 1,"code"=> 3]);
            DB::table('rb_military_rank')->insert(["id"=> 27,"name_ru"=> "младший офицерский состав","name_kk"=> "кіші офицерлік құрам","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.01]);
            DB::table('rb_military_rank')->insert(["id"=> 28,"name_ru"=> "лейтенант","name_kk"=> "лейтенант","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.02]);
            DB::table('rb_military_rank')->insert(["id"=> 29,"name_ru"=> "старший лейтенант","name_kk"=> "аға лейтенант","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.03]);
            DB::table('rb_military_rank')->insert(["id"=> 30,"name_ru"=> "капитан","name_kk"=> "капитан","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.04]);
            DB::table('rb_military_rank')->insert(["id"=> 31,"name_ru"=> "капитан-лейтенант","name_kk"=> "капитан-лейтенант","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.05]);
            DB::table('rb_military_rank')->insert(["id"=> 32,"name_ru"=> "старший офицерский состав","name_kk"=> "аға офицерлер құрамы","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.06]);
            DB::table('rb_military_rank')->insert(["id"=> 33,"name_ru"=> "майор","name_kk"=> "майор","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.07]);
            DB::table('rb_military_rank')->insert(["id"=> 34,"name_ru"=> "капитан третьего ранга","name_kk"=> "үшінші ранг капитаны","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.08]);
            DB::table('rb_military_rank')->insert(["id"=> 35,"name_ru"=> "подполковник","name_kk"=> "подполковник","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.09]);
            DB::table('rb_military_rank')->insert(["id"=> 36,"name_ru"=> "капитан второго ранга","name_kk"=> "екінші ранг капитаны","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.1]);
            DB::table('rb_military_rank')->insert(["id"=> 37,"name_ru"=> "полковник","name_kk"=> "полковник","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.11]);
            DB::table('rb_military_rank')->insert(["id"=> 38,"name_ru"=> "капитан первого ранга","name_kk"=> "бірінші ранг капитаны","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.12]);
            DB::table('rb_military_rank')->insert(["id"=> 39,"name_ru"=> "высший офицерский состав","name_kk"=> "жоғары офицерлік құрам","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.13]);
            DB::table('rb_military_rank')->insert(["id"=> 40,"name_ru"=> "генерал-майор","name_kk"=> "генерал-майор","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.14]);
            DB::table('rb_military_rank')->insert(["id"=> 41,"name_ru"=> "контр-адмирал","name_kk"=> "контр-адмирал","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.15]);
            DB::table('rb_military_rank')->insert(["id"=> 42,"name_ru"=> "генерал-лейтенант","name_kk"=> "генерал-лейтенант","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.16]);
            DB::table('rb_military_rank')->insert(["id"=> 43,"name_ru"=> "вице-адмирал","name_kk"=> "вице-адмирал","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.17]);
            DB::table('rb_military_rank')->insert(["id"=> 44,"name_ru"=> "генерал-полковник","name_kk"=> "генерал-полковник","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.18]);
            DB::table('rb_military_rank')->insert(["id"=> 45,"name_ru"=> "адмирал","name_kk"=> "адмирал","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.19]);
            DB::table('rb_military_rank')->insert(["id"=> 46,"name_ru"=> "генерал армии","name_kk"=> "армиия генералы","parent_id"=> 26,"is_have_child"=> 0,"code"=> 3.191]);
            DB::table('rb_military_rank')->insert(["id"=> 47,"name_ru"=> "не служил в ВС","name_kk"=> "ӘК қызмет еткен жоқ","parent_id"=> 0,"is_have_child"=> 0,"code"=> 5]);
            DB::table('rb_military_rank')->insert(["id"=> 48,"name_ru"=> "невоеннообязан","name_kk"=> "әскери міндетті емес","parent_id"=> 0,"is_have_child"=> 0,"code"=> 6]);
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
