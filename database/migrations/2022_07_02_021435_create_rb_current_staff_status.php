<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRbCurrentStaffStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rb_current_staff_status', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('code', 10)->nullable()->comment('Код');
            $table->string('name_kk', 255)->nullable()->comment('Наименование на казахском');
            $table->string('name_ru', 255)->nullable()->comment('Наименование на русском');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE rb_current_staff_status COMMENT = 'Текущий статус сотрудника'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rb_current_staff_status');
    }
}