<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePLP extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_plp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_plp');
            $table->string('judul_ki');
            $table->string('judul_laporan');
            $table->string('tahun');
            $table->string('search');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tabel_plp');
    }
}
