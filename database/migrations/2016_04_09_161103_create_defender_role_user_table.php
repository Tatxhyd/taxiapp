<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefenderRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(config('defender.role_user_table', 'role_user'), function (Blueprint $table) {
            $table->integer('user_id')->index('fk_role_user_user_id_idx');
            $table->foreign('user_id','fk_role_user_user_id_idx')->references('id')->on(config('auth.table', 'users'))->onDelete('cascade');

            $table->integer('role_id')->index('fk_r_u_role_id_idx');
            $table->foreign('role_id','fk_r_u_role_id_idx')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table(config('defender.role_user_table', 'role_user'), function (Blueprint $table) {
            $table->dropForeign(config('defender.role_user_table', 'role_user').'_user_id_foreign');
          $table->dropForeign(config('defender.role_user_table', 'role_user').'_'.config('defender.role_key', 'role_id').'_foreign');
        });

        Schema::drop(config('defender.role_user_table', 'role_user'));
    }
}
