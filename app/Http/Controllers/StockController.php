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

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $auser = Auth()->user();
        $products = product::where([['sold_out','=',NULL],['shop_id','=',$auser->shop_id]])->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $type = type::all();
        $ltype = ltype::all();
        $shops = shop::all();
        return view('stock.stock',compact('products','shops','type','ltype','other_charges','item_name','item_model','color','auser'));
    }


    public function branch_stock($id)
    {
        
        $auser = Auth()->user();
        $products = product::where([['sold_out','=',NULL],['shop_id','=',$id]])->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $type = type::all();
        $ltype = ltype::all();
        $shops = shop::all();
        return view('stock.branch_stock',compact('products','shops','type','ltype','other_charges','item_name','item_model','color','auser'));
    }


    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemName = ItemName::all();
        $itemModel = ItemModel::all();
        $type = type::all();
        $ltype = ltype::all();
        $color = color::all();
        $auser = Auth()->user();
        
        return view('buy.buy',compact('itemName','ltype','type','itemModel','color','auser'));
    }


    public function stockedit($id)
    {
        $product = product::findOrFail($id);
        $itemName = ItemName::all();
        $itemModel = ItemModel::all();
        $type = type::all();
        $ltype = ltype::all();
        $color = color::all();
        $auser = Auth()->user();
        
        return view('stock.edit',compact('itemName','product','ltype','type','itemModel','color','auser'));
    }

    public function stockupdate(Request $request,$id)
    {
        $data= product::findOrFail($id);
        $data->item_name=$request->get('item_name');
        $data->item_model=$request->get('item_model');
        $data->color=$request->get('color');
        $data->cycle_no=$request->get('cycle_no');
        $data->fraim_no=$request->get('fraim_no');
        $data->type = $request->get('type');
        $data->purchases_date = $request->get('purchases_date');
        $data->purchases_amount= $request->get('purchses_amount');
        $data->ext_date = $request->get('exp_date');
        $data->l_type = $request->get('ltype');

        $data->sale_customer=$request->get('name');
        $data->sale_customer_phone = $request->get('phone_no');
        $data->sale_customer_address=$request->get('address');

        $data->remark=$request->get('remark');

        $data->update();
        return redirect('stock');
       
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auser = auth()->user();

        $data= new product;
        $data->item_name=$request->get('item_name');
        $data->item_model=$request->get('item_model');
        $data->color=$request->get('color');
        $data->cycle_no=$request->get('cycle_no');
        $data->fraim_no=$request->get('fraim_no');
        $data->type = $request->get('type');
        $data->purchases_date = $request->get('purchases_date');
        $data->purchases_amount= $request->get('purchses_amount');
        $data->ext_date = $request->get('exp_date');
        $data->l_type = $request->get('ltype');

        $data->buy_user_id=$auser->id;
        $data->buy_shop_id=$auser->shop_id;

        $data->shop_id=$auser->shop_id;

        $data->sale_customer=$request->get('name');
        $data->sale_customer_phone = $request->get('phone_no');
        $data->sale_customer_address=$request->get('address');

        $data->remark=$request->get('remark');

        $data->save();

        $products=product::where('shop_id',$auser->shop_id)->get();
        foreach($products as $data){
            $id = $data->id;
        }

        $data = brochure::where([['type',"=",'buy'],['shop_id','=',$auser->shop_id]])->get();
        $count = count($data);

        $OtherCharges = OtherCharges::where('product_id',$id)->get();
        $oct = 0;
        foreach($OtherCharges as $data){
            $oct += $data->other_charges;
        }

        $data = new brochure;
        $data->product_id = $id;
        $data->shop_id = $auser->shop_id;
        $data->brochures_no = 100001+$count;
        $data->amount = $request->get('purchses_amount')+$oct;
        $data->type = "buy";
        $data->save();
        $oth =$request->get('other_charges');
        
        if(isset($oth)){

            $data = new OtherCharges;
            $data->product_id = $id;
            $data->shop_id = $auser->shop_id;
            $data->other_charges = $request->get('other_charges');
            $data->redmark = $request->get('redmark');
            $data->save();

            
        }

        $data = brochure::all();

        
        $data = brochure::where([['type','=','buy'],['product_id','=',$id]])->get();
        foreach($data as $d){
            $dd = $d->id;
        }

        return redirect('voucher/'.$dd.'/view');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $auser = Auth()->user();
        $product = product::findOrfail($id);
        $other = OtherCharges::where('product_id',$id)->get();

        $total=0;
        foreach($other as $data){
            $total += $data->other_charges;
        }
        return view('stock.other',compact('product','auser','other','total'));
    }

    
    public function view($id)
    {
        $product = product::findOrfail($id);
        $other = OtherCharges::where('product_id',$id)->get();
        $w_shop = w_shop::all();
        $total=0;
        foreach($other as $data){
            $total += $data->other_charges;
        }
        $auser = Auth()->user();
        return view('stock.view',compact('product','w_shop','auser','other','total'));
    }

    

    public function other_add(Request $request ,$id){

        $data = new OtherCharges;
        $data->product_id = $id;
        $data->other_charges = $request->get('other_charges');
        $data->redmark = $request->get('redmark');
        $data->save();

        return back();
    }

    public function other_charges(){
        $auser = Auth()->user();
        $product = product::where('shop_id',$auser->shop_id)->get();
        $other = OtherCharges::where('shop_id',$auser->shop_id)->get();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        return view('stock.other_charges',compact('product','other','auser'));
    }

    public function add_oc()
    {   
        $auser = Auth()->user();
        return view('stock.add_other_charges',compact('auser'));
    }

    public function other_charges_del($id){
        $data = OtherCharges::findOrFail($id);
        $data->delete();
        return back();
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

    

 public function open(){
    $auser = Auth()->user();
    $products = Product::where('sold_out',null)->get();
    $products_b1 = Product::where([['shop_id','=',1],['sold_out','=',null]])->get();
    $products_b2 = Product::where([['shop_id','=',2],['sold_out','=',null]])->get();
    $momey[] = 0;

    return view('amount.open',compact('auser','momey','products','products_b1','products_b2'));
}


public function money_in_out(Request $request){
    $auser = Auth()->user();
    $money = new Money;
    $momey->shop_id = $auser->shop_id;
    $money->amount = $request->money;
    $money->in_out = $request->in_out;
    $money->redmark = $request->redmark;
    $money->save();
    return redirect('open/amount');
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

    public function service(){

        $products = product::all();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $w_shop = w_shop::all();
        $service = service::all();
        $auser = Auth()->user();
        $type = type::all();
        return view('service.service',compact('products','type','service','auser','other_charges','item_name','item_model','color','w_shop'));
    }

    public function serviceview($id){

        $other_charges = OtherCharges::all();
        $service = service::where('w_shop_id',$id)->get();
        $products = product::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $w_shop = w_shop::all();
        $services = service::all();
        $type = type::all();
        $auser = Auth()->user();
        return view('service.shopview',compact('products','type','services','id','service','auser','other_charges','item_name','item_model','color','w_shop'));
    }

    public function service_add(Request $request){

        $f_no = $request->get('fraim_no');
        $pro =  product::all();
        
        foreach($pro as $data){
            if($data->fraim_no == $f_no){
                $id = $data->id;
            }
        }
        $product =  product::findOrFail($id);
        $product->servece_shop = $request->get('shop_id');
        $product->update();

        $service = new service;
        $service->w_shop_id = $request->get('shop_id');
        $service->product_id = $id;
        $service->save();

        return redirect('service');
    }

    public function service_success($id){
        $service = service::findOrFail($id);
        $service->success = 1;
        $service->update();

        $product =  product::findOrFail($service->product_id);
        $product->service_shop = NULL;
        $service->update();

        return redirect('service');
    }

    public function service_rec(){
        $other_charges = OtherCharges::all();
        $service = service::all();
        $products = product::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $w_shop = w_shop::all();
        $auser = Auth()->user();
        $type = type::all();
        return view('service.service_rec',compact('products','type','service','auser','other_charges','item_name','item_model','color','w_shop'));
    }

    public function credit(){
        $products = product::where('credit',1)->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $type = type::all();
        $credit = credit::all();
        return view('credit.credit',compact('products','credit','type','other_charges','item_name','item_model','color','auser'));
    }


    public function success(){
        $products = product::where('credit',1)->get();
        $other_charges = OtherCharges::all();
        $item_name = ItemName::all();
        $item_model = ItemModel::all();
        $color = color::all();
        $auser = Auth()->user();
        $type = type::all();
        $credit = credit::all();
        return view('credit.success',compact('products','credit','type','other_charges','item_name','item_model','color','auser'));
    }

    public function credit_success($id){
        $credit = credit::findOrFail($id);
        $credit->success = 1;
        $credit->update();
        return back();
    }

    


   
}
