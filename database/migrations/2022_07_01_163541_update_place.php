<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('place', function (Blueprint $table) {
            $table->date('training_start_date')->nullable()->comment('Начало обучение')->after('end_date');
            $table->date('training_end_date')->nullable()->comment('Конец обучение')->after('training_start_date');
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
