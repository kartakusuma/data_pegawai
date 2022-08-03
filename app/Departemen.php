<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departemen extends Model
{
    use SoftDeletes;
    
    protected $table = "departemen";

    public function pegawai() {
        return $this->hasMany('App\Pegawai', 'departemen_id');
    }
}
