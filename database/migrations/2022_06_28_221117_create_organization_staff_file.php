<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrganizationStaffFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_staff_file', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('organization_id')->default(0)->comment('organization.id Айди организации');
            $table->index('organization_id');
            $table->integer('staff_id')->default(0)->comment('organization_staff.id Айди сотрудника');
            $table->index('staff_id');
            $table->integer('file_type_id')->default(0)->comment('rb_staff_file_type.id К какому типу относятся файл?');
            $table->index('file_type_id');
            $table->string('file_name', 255)->nullable()->comment('Имя файла для отображение, пользователь задал.');
            $table->integer('file_order')->default(1)->comment('Нумерация файла');
            $table->integer('upload_id')->default(0)->comment('upload.id Сам файл в оригинале');
            $table->index('upload_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE organization_staff_file COMMENT = 'Файлы сотрудников организации образование'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_staff_file');
    }
}