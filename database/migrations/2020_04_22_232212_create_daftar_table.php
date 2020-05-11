<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namalengkap');
            $table->string('namapanggilan');
            $table->string('jk');
            $table->string('lahir');
            $table->string('agama');
            $table->string('cita-cita');
            $table->string('hoby');
            $table->string('anak');
            $table->string('jumlah');
            $table->string('berat');
            $table->string('tinggi');
            $table->string('golongan');

            $table->string('alamat');
            $table->string('tinggal');

            $table->string('penyakit');

            $table->string('namaayah');
            $table->string('lahirayah');
            $table->string('pekerjaanayah');
            $table->string('pendidikanayah');
            $table->string('agamaayah');
            $table->string('wargaayah');
            $table->string('noayah');

            $table->string('namaibu');
            $table->string('lahiribu');
            $table->string('pekerjaanibu');
            $table->string('pendidikanibu');
            $table->string('agamaibu');
            $table->string('wargaibu');
            $table->string('noibu');

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
        Schema::dropIfExists('table');
    }
}
