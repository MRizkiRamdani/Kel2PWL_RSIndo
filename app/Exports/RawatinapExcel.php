<?php

namespace App\Exports;

use App\Models\Rawatinap;
use Maatwebsite\Excel\Concerns\FromCollection;

class RawatinapExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rawatinap::all();
    }
}
