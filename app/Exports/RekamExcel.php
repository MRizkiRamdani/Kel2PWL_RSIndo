<?php

namespace App\Exports;

use App\Models\Rekamedis;
use Maatwebsite\Excel\Concerns\FromCollection;

class RekamExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rekamedis::all();
    }
}
