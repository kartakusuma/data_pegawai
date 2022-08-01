<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    public function departemen() {
        return $this->belongsTo('App\Departemen', 'departemen_id');
    }
}
