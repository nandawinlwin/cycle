<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;
use App\Exports\ProductSoldout;
use App\Exports\ProductTransfer;
use App\Exports\OtherCharge;
use App\product;
use App\color;
use App\ltype;

class ExportImport extends Controller
{

    

    public function index(){
        return view('exportinport.view');
    }

    public function exportProduct(Request $request){
        $start = $request->start;
        
        return Excel::download(new ProductExport($start), 'Stock - '. date('d_m_Y').'.xlsx');

    }


    public function exportSoldout(){
        
        return Excel::download(new ProductSoldout, 'Product Sold Out - '. date('d_m_Y').'.xlsx');

    }

    public function exportTransfer(){
        
        return Excel::download(new ProductTransfer, 'Product Transfer - '. date('d_m_Y').'.xlsx');

    }

    public function exportOtherCharge(){
        
        return Excel::download(new OtherCharge, 'Other Charge - '. date('d_m_Y').'.xlsx');

    }

    public function inport(){
        
    }

   
}
