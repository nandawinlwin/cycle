<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ItemName;
use App\ItemModel;
use App\color;
use App\product;
use App\OtherCharges;
use App\brochure;
use App\type;
use App\credit;

class BrochureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auser = Auth()->user();
        $products = product::where('shop_id',$auser->shop_id)->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $type = type::all();
        $brochure = brochure::where([['type','=','sale'],['shop_id','=',$auser->shop_id]])->get();
        $credit = credit::all();
        return view('brochure.brochure',compact('products','brochure','credit','type','other_charges','item_name','item_model','color','auser'));
        
    }


    public function buy()
    {
        $products = product::all();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $type = type::all();
        $brochure = brochure::where([['type','=','buy'],['shop_id','=',$auser->shop_id]])->get();
        $credit = credit::all();
        return view('brochure.buybrochure',compact('products','credit','brochure','type','other_charges','item_name','item_model','color','auser'));
        
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
        $brochure = brochure::findOrFail($id);
        $product = product::findOrFail($brochure->product_id);
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $type = type::all();
        $credit = credit::all();
        return view('brochure.view',compact('product','credit','brochure','type','other_charges','item_name','item_model','color','auser'));
        
    }

    public function printnow($id){

        $brochure = brochure::findOrFail($id);
        $product = product::findOrFail($brochure->product_id);
        $credit = credit::where('product_id',$product->id)->get();
        $auser = Auth()->user();
        return view('sale.printview',compact('brochure','product','auser','credit'));
    }

    public function printcopy($id){

        $brochure = brochure::findOrFail($id);
        $product = product::findOrFail($brochure->product_id);
        $credit = credit::where('product_id',$product->id)->get();
        $auser = Auth()->user();
        return view('sale.printcopy',compact('brochure','product','auser','credit'));
    }


    public function printbuy($id){

        $brochure = brochure::findOrFail($id);
        $product = product::findOrFail($brochure->product_id);
        $item_name = ItemName::findOrFail($product->item_name);
        $item_model = ItemModel::findOrFail($product->item_model);
        $color = color::findOrFail($product->color);
        $credit = credit::where('product_id',$product->id)->get();
        $auser = Auth()->user();
        return view('sale.buyprint',compact('brochure','product','auser','item_name','item_model','color','credit'));
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
