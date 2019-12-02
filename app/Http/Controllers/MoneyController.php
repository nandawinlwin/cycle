<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Money;
use App\product;
use Illuminate\Support\Facades\Auth;
use App\OtherCharges;

class MoneyController extends Controller
{
    public function index(){
        $auser = Auth::user();
        $auser = Auth()->user();
        $products = Product::where('sold_out',null)->get();
        $products_b1 = Product::where([['shop_id','=',$auser->shop_id],['sold_out','=',null]])->get();
        $momey_now = Money::all();
        $tody_money = 0;
        foreach($momey_now as $data){
            $tody_money += $data->amount;
        }

        $otc = OtherCharges::where('shop_id',$auser->shop_id)->get();
        $ot = 0;
        $momey= 0;
        foreach($products_b1 as $data){
            foreach($otc as $data2){
                if($data->id == $data2->product_id){
                    $ot += $data2->other_charges;
                }
            }
            $momey += $data->purchases_amount;
        }
        $products_b2 = Product::where([['shop_id','=',2],['sold_out','=',null]])->get();


        return view('amount.open',compact('auser','momey','ot','products','tody_money','products_b1','products_b2'));
    }

    public function moneyAdd(Request $request){

        $money = new Money;
        $money->f_no = $request->f_no;
        $momey->amount = $request->amount;
        $momey->redmark = $request->remark;
        $momey->save();

        return redirect('open/amount');

    }
    
}
