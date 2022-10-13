<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrganizationBranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_branch', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('organization_id')->default(0)->comment('organization.id Айди организации');
            $table->index('organization_id');
            $table->string('full_address_kk', 255)->nullable()->comment('Полный адрес на казахском');
            $table->string('full_address_ru', 255)->nullable()->comment('Полный адрес на русском');
            $table->string('map_coordinates', 50)->nullable()->comment('Координаты на карте (широта, долгота)');
            $table->integer('study_room_number')->default(0)->comment('Количество комнат для занятий, единиц');
            $table->decimal('total_area', 8, 2)->comment('Общая площадь, кв. м.');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE organization_branch COMMENT = 'Филиалы организации'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_branch');
    }
}
