<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRbAcademicDegree extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rb_academic_degree', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('code', 10)->nullable()->comment('Код');
            $table->string('name_kk', 255)->nullable()->comment('Наименование на казахском');
            $table->string('name_ru', 255)->nullable()->comment('Наименование на русском');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE rb_academic_degree COMMENT = 'Академическая, ученая степень'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rb_academic_degree');
    }
}
