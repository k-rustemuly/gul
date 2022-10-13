<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('full_name', 255)->nullable()->comment('Полное имя сотрудника');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
        DB::statement("ALTER TABLE user ADD iin BIGINT(12) UNSIGNED ZEROFILL NOT NULL DEFAULT '0' COMMENT 'ИИН' AFTER id;");
        DB::statement("ALTER TABLE user ADD UNIQUE(iin);");
        DB::statement("ALTER TABLE user COMMENT = 'Пользователи'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
