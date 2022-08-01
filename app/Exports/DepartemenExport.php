<?php

namespace App\Exports;

use App\Departemen;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartemenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Departemen::all();
    }
}
