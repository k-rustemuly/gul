<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePlaceApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_apply', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('place_id')->default(0)->comment('place.id Айди место');
            $table->index('place_id');
            $table->integer('organization_id')->default(0)->comment('organization.id Айди организации');
            $table->index('organization_id');
            $table->integer('min_quantity')->default(0)->comment('Минимальное количество мест');
            $table->integer('max_quantity')->default(0)->comment('Максимальное количество мест');
            $table->integer('status_id')->default(1)->comment('rb_place_apply_status');
            $table->string('comment', 255)->nullable()->comment('Комментарии');
            $table->integer('approved_quantity')->default(0)->comment('Одобренный количество мест');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE place_apply COMMENT = 'Отклик заявок на место'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_apply');
    }
}
