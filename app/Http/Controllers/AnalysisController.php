<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ItemName;
use App\ItemModel;
use App\color;
use App\product;
use App\OtherCharges;
use App\Money;
use App\w_shop;
use App\type;
use App\ltype;
use App\brochure;
use App\service;
use App\credit;
use App\user;
use App\shop;

class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auser = Auth()->user();
        $product_all = product::where('sold_out',NULL)->get();
        $name = ItemName::all();
        $model = ItemModel::all();
        $color = color::all();
        $money = Money::all();
        $type = type::all();
        $ltype = ltype::all();
        $credit = credit::all();
        $user = user::all();
        $shop = shop::all();

        $product_one = product::where([['shop_id','=',1],['sold_out','=',NULL]])->get();
        $product_two = product::where([['shop_id','=',2],['sold_out','=',NULL]])->get();

        $date = \Carbon\Carbon::today()->subDays(0);

        $product_all_sale = brochure::where('type','sale')->whereDate('created_at',">=",$date)->get();
        $product_all_buy = brochure::where('type','buy')->whereDate('created_at',">=",$date)->get();

        $brand_one_sale = brochure::where([['type','=','sale'],['shop_id','=',1]])->whereDate('created_at',">=",$date)->get();
        $brand_one_buy = brochure::where([['type','=','buy'],['shop_id','=',1]])->whereDate('created_at',">=",$date)->get();

        $brand_two_sale = brochure::where([['type','=','sale'],['shop_id','=',2]])->whereDate('created_at',">=",$date)->get();
        $brand_two_buy = brochure::where([['type','=','buy'],['shop_id','=',2]])->whereDate('created_at',">=",$date)->get();


        /* 

        'auser'
        'product_all'
        'product_all_sale'
        'product_all_buy'
        'product_one'
        'brand_one_sale'
        'brand_one_buy'
        'product_two'
        'brand_two_sale'
        'brand_two_buy'
        'model'
        'name'
        'color'
        'money'
        'type'
        'ltype'
        'credit'
        'auser'
        'shop'
        
        */

        return view('analysis.analysis',compact('auser','product_all','brand_two_buy','brand_two_sale','brand_one_buy','product_all_sale','brand_one_sale','product_all_buy','product_one','product_two','model','name','color','money','type','ltype','credit','auser','shop'));

       
        
    }



    public function check($day)
    {
        $auser = Auth()->user();
        $product_all = product::where('sold_out',NULL)->get();
        $name = ItemName::all();
        $model = ItemModel::all();
        $color = color::all();
        $money = Money::all();
        $type = type::all();
        $ltype = ltype::all();
        $credit = credit::all();
        $user = user::all();
        $shop = shop::all();

        
        $product_one = product::where([['shop_id','=',1],['sold_out','=',NULL]])->get();
        $product_two = product::where([['shop_id','=',2],['sold_out','=',NULL]])->get();

        $date = \Carbon\Carbon::today()->subDays($day);

        $product_all_sale = brochure::where('type','sale')->whereDate('created_at',">=",$date)->get();
        $product_all_buy = brochure::where('type','buy')->whereDate('created_at',">=",$date)->get();

        $brand_one_sale = brochure::where([['type','=','sale'],['shop_id','=',1]])->whereDate('created_at',">=",$date)->get();
        $brand_one_buy = brochure::where([['type','=','buy'],['shop_id','=',1]])->whereDate('created_at',">=",$date)->get();

        $brand_two_sale = brochure::where([['type','=','sale'],['shop_id','=',2]])->whereDate('created_at',">=",$date)->get();
        $brand_two_buy = brochure::where([['type','=','buy'],['shop_id','=',2]])->whereDate('created_at',">=",$date)->get();


        /* 

        'auser'
        'product_all'
        'product_all_sale'
        'product_all_buy'
        'product_one'
        'brand_one_sale'
        'brand_one_buy'
        'product_two'
        'brand_two_sale'
        'brand_two_buy'
        'model'
        'name'
        'color'
        'money'
        'type'
        'ltype'
        'credit'
        'auser'
        'shop'
        
        */

        return view('analysis.day',compact('auser','product_all','brand_two_buy','brand_two_sale','brand_one_buy','product_all_sale','brand_one_sale','product_all_buy','product_one','product_two','model','name','color','money','type','ltype','credit','auser','shop'));

       
        
    }

    public function filter(Request $request){

        $auser = Auth()->user();
        $products = product::where([['sold_out','=',NULL],['shop_id','=',$auser->shop_id]])->get();
        $other_charges = OtherCharges::where('shop_id',$auser->shop_id)->get();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $type = type::all();
        $ltype = ltype::all();
        $shops = shop::all();
        return view('analysis.filter',compact('products','shops','type','ltype','other_charges','item_name','item_model','color','auser'));

    }

    

}
