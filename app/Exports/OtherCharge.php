<?php

namespace App\Exports;

use App\OtherCharges;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;

class OtherCharge implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $oc = OtherCharges::get([
            'cycle_no',
            'frame_no',
            'other_charges',
            'shop_id',
            ]);

        return $oc;
    }

    public function headings(): array
    {
        return [
            'Cycle No.',
            'Fraim No.',
            'Other Charges',
            'Shop',
        ];
    }
}
