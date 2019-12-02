<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ItemName;
use App\ItemModel;
use App\color;
use App\row;
use App\shop;
use App\w_shop;
use App\type;
use App\ltype;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ItemName = ItemName::all();
        $model = ItemModel::all();
        $color = color::all();
        $rows = row::all();
        $w_shop = w_shop::all();
        $type = type::all();
        $ltype = ltype::all();
        $auser = Auth()->user();
        return view('setting.setting',compact('ItemName','ltype','auser','model','color','rows','w_shop','type'));
    }


    /**
     * Item name 
     */
    public function itemNameCeate(Request $request){
        $data= new ItemName;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function itemNameDel($id){
        $data = ItemName::findOrFail($id);
        $data->delete();
        return redirect('setting');
    }
    

     /**
     * Model
     */
    public function modelCeate(Request $request){
        $data= new ItemModel;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function modelDel($id){
        $data = ItemModel::findOrFail($id);
        $data->delete();
        return redirect('setting');
    }


    
     /**
     * Color
     */
    public function colorCeate(Request $request){
        $data= new color;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function colorDel($id){
        $data = color::findOrFail($id);
        $data->delete();
        return redirect('setting');
    }


    public function w_shop_add(Request $request){
        $data= new w_shop;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function typeAdd(Request $request){
        $data= new type;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function typeDel($id){
        $data = type::findOrFail($id);
        $data->delete();
        return redirect('setting');
    }

    public function ltypeAdd(Request $request){
        $data= new ltype;
        $data->name=$request->get('name');
        $data->save();
        return redirect('setting');
    }

    public function ltypeDel($id){
        $data = ltype::findOrFail($id);
        $data->delete();
        return redirect('setting');
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
