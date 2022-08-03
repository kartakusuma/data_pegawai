<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use SoftDeletes;

    protected $table = 'pegawai';

    protected $cascadeDeletes = ['departemen_id'];

    public function departemen() {
        return $this->belongsTo('App\Departemen', 'departemen_id');
    }
}
