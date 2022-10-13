<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRbStaffFileType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rb_staff_file_type', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->text('name_kk')->nullable()->comment('Наименование на казахском');
            $table->text('name_ru')->nullable()->comment('Наименование на русском');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE rb_staff_file_type COMMENT = 'Типы файлов для сотрудников организации обр'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rb_staff_file_type');
    }
}
