<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            //di dalam parameter foreign wajib diawali  fk

            $table->foreign('user_id', 'fk_detail_user_to_users')->references('id')->on('users')
           ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('type_user_id', 'fk_detail_user_to_type_users')->references('id')->on('type_user')
           ->onUpdate('cascade') ->onDelete('cascade');

            //cascade = boleh di hapus di tabel asal ataupun tabel turunan
            //strict = hanya bisa dihapus di tabel asal
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            $table->dropForeign('fk_detail_user_to_users');
            $table->dropForeign('fk_detail_user_to_type_users');
            //

         
        });
    }
}
