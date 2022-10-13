<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrganizationStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_staff', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('organization_id')->default(0)->comment('organization.id Айди организации');
            $table->index('organization_id');
            $table->string('full_name', 255)->nullable()->comment('Полное имя сотрудника');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE organization_staff ADD iin BIGINT(12) UNSIGNED ZEROFILL NOT NULL DEFAULT '0' COMMENT 'ИИН сотрудника' AFTER organization_id;");
        DB::statement("ALTER TABLE organization_staff ADD UNIQUE(organization_id, iin)");
        DB::statement("ALTER TABLE organization_staff COMMENT = 'Учителя организации образование'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_staff');
    }
}
