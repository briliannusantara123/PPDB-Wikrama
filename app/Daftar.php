<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table ='daftar_siswa';
    protected $fillable =['namalengkap','namapanggilan','jk','tempatlahir','lahir','agama','citacita','hoby','anak','jumlah','berat','tinggi','golongan','alamat','tinggal','penyakit','namaayah','tempatlahirayah','lahirayah','pekerjaanayah','pendidikanayah','agamaayah','wargaayah','noayah','namaibu','tempatlahiribu','lahiribu','pekerjaanibu','pendidikanibu','agamaibu','wargaibu','noibu'];
}

