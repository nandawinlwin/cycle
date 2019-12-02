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
use App\shop;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auser = Auth()->user();
        $products = product::where([['sold_out',NULL],['shop_id',$auser->shop_id]])->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $ltype = ltype::all();
        $auser = Auth()->user();
        return view('sale.sale',compact('products','ltype','other_charges','auser','item_name','item_model','color'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::findOrFail($id);
        
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $other_charges = OtherCharges::all();
        return view('sale.salenow',compact('product','other_charges','auser','item_name','item_model','color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $auser = Auth()->user();
        $product = product::findOrFail($id);
        $product->sale_amount = $request->get('price');
        $product->buy_customer = $request->get('name');
        $product->buy_customer_phone = $request->get('phone');
        $product->buy_customer_address = $request->get('address');
        $product->sold_out_date = date('Y-m-d H:i:s');
        $product->sale_user_id = $auser->id;
        $product->sale_shop_id = $auser->shop_id;
        if($request->get('credit') != NULL){
           
            $product->credit = 1;

        }
        $product->sold_out = 1;
        $product->update();
        
        if($request->get('credit') != NULL){
            $credit = new credit;
            $credit->product_id = $id;
            $credit->shop_id = $auser->id;
            $credit->amount = $request->get('credit');
            $product->credit = 1;
            $credit->save();

        }

        $data = brochure::where('type','sale')->get();
        $count = count($data);

        $data = new brochure;
        $data->product_id = $id;
        $data->brochures_no = 100001+$count;
        $data->amount = $request->get('price');
        $data->shop_id =  $auser->shop_id;
        $data->remark = $request->get('remark');
        $data->type = "sale";
        $data->save();

        $data = brochure::where([['type','=','sale'],['product_id','=',$id]])->get();
        foreach($data as $d){
            $dd = $d->id;
        }

        return redirect('voucher/'.$dd.'/view');
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



    public function soldout($id){
        
        $auser = Auth()->user();
        $products = product::where([['sold_out','=',1],['shop_id','=',$id]])->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $type = type::all();
        $ltype = ltype::all();
        $shops = shop::all();
        return view('soldout.soldout',compact('products','shops','type','ltype','other_charges','item_name','item_model','color','auser'));
       
    }

}
