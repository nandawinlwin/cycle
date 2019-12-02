<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\shop;
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
use App\transfer;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = shop::all();
        $auser = Auth()->user();
        $date = \Carbon\Carbon::today()->subDays(0);
        $product = product::where('type','sale')->whereDate('created_at',">=",$date)->get();
        return view('branch.shop',compact('shop','auser'));
    }


    public function branch($id){

        $auser = Auth()->user();
        $date = \Carbon\Carbon::today()->subDays(0);
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
        $transfer = transfer::where([['shop_id','=',$id],['created_at','>=',$date]])->get();

       

        $product_all_sale = brochure::where('type','sale')->whereDate('created_at',">=",$date)->get();
        $product_all_buy = brochure::where('type','buy')->whereDate('created_at',">=",$date)->get();


        /* 

        'auser'
        'product_all'
        'product_all_sale'
        'product_all_buy'
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

        $products = product::where([['shop_id','=',$id],['sold_out','=',null]])->get();
        $product_tody_sale = product::where([['shop_id','=',$id],['sold_out','=',1]])->whereDate('sold_out_date',">=",$date)->get();
        $product_tody_buy = product::where([['shop_id','=',$id],['sold_out','=',null]])->whereDate('created_at',">=",$date)->get();

        return view('branch.branch',compact('id','products','transfer','product_tody_sale','product_tody_buy','auser','model','name','color','money','type','ltype','credit','auser','shop'));

       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new shop;
        $shop->name = $request->name;
        $shop->save();
        return redirect('branch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
