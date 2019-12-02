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

    public function exportProduct(){
        
        return Excel::download(new ProductExport, 'Stock - '. date('d_m_Y').'.xlsx');

    }


    public function exportProduct_date(Request $request){
        
        return Excel::download(new ProductExport, 'Stock - '. date('d_m_Y').'.xlsx');

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
