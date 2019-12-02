<?php

namespace App\Exports;

use App\transfer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;

class ProductTransfer implements FromCollection,WithHeadings
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
