<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat','avatar'];

    public function matkul(){
	return $this->belongsToMany(Matkul::class)->withPivot('nilai');
	}
}


