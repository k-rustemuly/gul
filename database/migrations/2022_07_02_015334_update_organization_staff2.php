<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrganizationStaff2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organization_staff', function (Blueprint $table) {
            //$table->dropColumn('iin');
            $table->dropColumn('full_name');
            $table->dropColumn('academic_degree_id');
            $table->dropColumn('category_id');
            $table->integer('user_id')->default(0)->comment('user.id Айди пользователя')->after('organization_id');
            $table->index('user_id');
            $table->integer('position_id')->default(1)->comment('rb_position.id Должность')->after('user_id');
            $table->index('position_id');
            $table->integer('current_staff_status_id')->default(1)->comment('rb_current_staff_status.id Текущий статус сотрудника')->after('position_id');
            $table->index('current_staff_status_id');
        });
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
