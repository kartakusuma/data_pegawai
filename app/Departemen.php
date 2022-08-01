<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected $table = "departemen";

    public function pegawai() {
        return $this->hasMany('App\Pegawai', 'departemen_id');
    }
}
