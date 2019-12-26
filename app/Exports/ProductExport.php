<?php

namespace App\Exports;

use App\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;

class ProductExport implements FromCollection, WithHeadings
{

    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $products_all = product::where([['sold_out','=',null],['created_at','=','$this->request->start']])->get([
            'item_name',
            'item_model',
            'cycle_no',
            'fraim_no',
            'color',
            'l_type',
            'ext_date',
            'purchases_date',
            'purchases_amount',
            'buy_shop_id',
            'remark',
            'sale_customer',
            'sale_customer_phone',
            'sale_customer_address',
        ]);

        return $products_all;
    }

    public function headings(): array
    {
        return [
            'Cycle Name',
            'Cycle Model',
            'Cycle No',
            'Fraim No',
            'Color',
            'L-Type',
            'Exp Date',
            'Purchases Date',
            'Purchases Amount',
            'Shop',
            'Remark',
            'Dealer Name',
            'Dealer Phone',
            'Dealer Address'

        ];
    }
}
