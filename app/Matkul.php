<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['kode','nama','semester'];

    public function matkul()
	{
		return $this->belongsToMany(mhs::class)->withPivot('nilai');
	}

	public function dosen(){
    	return $this->belongsTo(Dosen::class);

    }
}

	