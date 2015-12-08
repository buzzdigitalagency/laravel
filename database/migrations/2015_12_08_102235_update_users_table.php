<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->string('userName')->nullable();
                $table->boolean('isAdmin')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('users')){
            if (Schema::hasColumn('users', 'userName') && Schema::hasColumn('users', 'isAdmin')){
                Schema::table('users', function ($table){
                    $table->string('userName');
                    $table->string('isAdmin');
                });
            }
        }
    }
}
