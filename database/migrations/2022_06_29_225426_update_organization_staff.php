<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrganizationStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organization_staff', function (Blueprint $table) {
            $table->integer('academic_degree_id')->default(1)->comment('rb_academic_degree.id Академическая, ученая степень')->after('full_name');
            $table->index('academic_degree_id');
            $table->integer('category_id')->default(1)->comment('rb_category.id Категория')->after('academic_degree_id');
            $table->index('category_id');
            $table->integer('rate_id')->default(1)->comment('rb_rate.id Ставка')->after('category_id');
            $table->index('rate_id');
            $table->integer('employment_type_id')->default(1)->comment('rb_employment_type.id Тип трудоустройства')->after('rate_id');
            $table->index('employment_type_id');
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
