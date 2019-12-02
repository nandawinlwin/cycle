<?php

namespace App\Exports\controller\export;

use App\transfer;
use Maatwebsite\Excel\Concerns\FromCollection;

class transfer implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return transfer::all();
    }
}
