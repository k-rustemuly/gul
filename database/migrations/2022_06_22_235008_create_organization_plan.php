<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrganizationPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_plan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('organization_id')->default(0)->comment('organization.id Айди организации');
            $table->index('organization_id');
            $table->integer('club_category_id')->default(1)->comment('rb_club_category.id К какой категории относятся?');
            $table->index('club_category_id');
            $table->integer('club_subcategory_id')->default(1)->comment('rb_club_subcategory.id К какой субкатегории относятся?');
            $table->index('club_subcategory_id');
            $table->string('file_name', 255)->nullable()->comment('Имя файла для отображение, пользователь задал.');
            $table->integer('file_order')->default(1)->comment('Нумерация файла');
            $table->integer('upload_id')->default(0)->comment('upload.id Сам файл в оригинале');
            $table->index('upload_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE organization_plan COMMENT = 'Планы организации'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_plan');
    }
}
