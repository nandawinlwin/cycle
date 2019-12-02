<?php

namespace App\Http\Controllers\export;

use App\transfer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportController implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $transfer = transfer::get([
            'cycle_no',
            'frame_no',
            'from',
            'to',
            'user_id'
            ]);

        return $transfer;
    }

    public function headings(): array
    {
        return [
            'Cycle No.',
            'Fraim No.',
            'From',
            'To',
            'Date',
            'User'
        ];
    }
}
