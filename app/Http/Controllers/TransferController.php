<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\user;
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
use App\transfer;

class TransferController extends Controller
{
    public function index(){
        $auser = Auth()->user();
        $products = product::where([['sold_out','=',NULL],['shop_id','=',$auser->shop_id]])->get();
        $other_charges = OtherCharges::where('shop_id',$auser->shop_id)->get();
        $type = type::all();
        $shops = shop::where('id','!=',$auser->shop_id)->get();
        return view('transfer.transfer',compact('products','shops','type','other_charges','auser'));
    }

    public function transfer(Request $request,$id){
        $auser = Auth()->user();
        $product = product::findOrFail($id);
        $product->shop_id = $request->shop_id;
        $product->update();

        $other_charges = OtherCharges::where([['shop_id','=',$auser->shop_id],['product_id','=',$product->id]])->get();
        foreach($other_charges as $data){
            $data->shop_id = $request->shop_id;
            $data->update();
        }

        $transfer = new transfer;
        $transfer->product_id = $id;
        $transfer->from = $auser->shop_id;
        $transfer->to = $request->shop_id;
        $transfer->user_id = $auser->id;
        $transfer->shop_id = $auser->shop_id;
        $transfer->save();

        return redirect('transfer');
    }

    public function rec(){
        $auser = Auth()->user();
        $product = product::all();
        $shops = shop::all();
        $users = user::all();
        $transfer = transfer::where('shop_id','=',$auser->shop_id)->get();
        return view('transfer.transfer_rec',compact('auser','product','transfer','users','shops'));
    }
} 
