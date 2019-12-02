<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

    Route::get('test','TestController@index');


    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:cache');
        return 'DONE'; //Return anything
    });

    
    Route::get('export_product', 'ExportImport@exportProduct');
    Route::get('export_soldout', 'ExportImport@exportSoldout');
    Route::get('export_Transfer', 'ExportImport@exportTransfer');
    Route::get('export_othercharges', 'ExportImport@exportOtherCharge');
    Route::post('import', 'ExportImport@import')->name('import');

Route::group(array('middleware'=>'auth'),function(){

    Route::get('importExportView', 'ExportImport@index');

    route::get('printnow/{id}','BrochureController@printnow');
    route::get('printcopy/{id}','BrochureController@printcopy');
    route::get('printbuy/{id}','BrochureController@printbuy');

    route::get('user','UserController@index');
    route::get('user/{id}/del','UserController@destroy');
    route::get('user/{id}/edit','UserController@edit');
    route::post('user/{id}/edit','UserController@update');
    route::post('user/create','UserController@create');
    route::get('user/{id}/desbale','UserController@desbale');
    route::get('user/{id}/enabale','UserController@enabale');

    route::get('stock','StockController@index');
    route::get('stock/{id}/other','StockController@show');
    route::get('stock/{id}/view','StockController@stockedit');
    route::post('stock/{id}/view','StockController@stockupdate');
    route::post('stock/{id}/other','StockController@other_add');
    route::get('stock/other/charges','StockController@other_charges');
    route::get('other/{id}/del','StockController@other_charges_del');
    route::get('other/{id}/view','StockController@view');
    route::get('branch/{id}/stock','StockController@branch_stock');
    route::get('other/add','StockController@add_oc');


    route::get('credit','StockController@credit');
    route::get('credit/success','StockController@success');
    route::get('credit/{c_id}/success','StockController@credit_success');

    route::get('service','StockController@service');
    route::get('serviceview/{id}','StockController@serviceview');
    route::get('service_rec','StockController@service_rec');
    route::get('service/{id}/success','StockController@service_success');

    route::get('open/amount','MoneyController@index');
    route::post('open/amount','MoneyController@moneyAdd');
    route::post('open/amount','StockController@money_in_out');

    route::get('buy','StockController@create');
    route::post('buy','StockController@store');

    route::get('sale','SaleController@index');
    route::get('salenow/{id}','SaleController@show');
    route::post('sale/{id}','SaleController@edit');

    route::get('voucher/sale','BrochureController@index');
    route::get('voucher/buy','BrochureController@buy');
    route::get('voucher/{id}/view','BrochureController@show');

    route::get('analysis','AnalysisController@index');
    route::get('analysis/{day}/day','AnalysisController@check');
    route::get('analysis/filter','AnalysisController@filter');

    route::get('setting','SettingController@index');

    route::get('branch','BranchController@index');
    route::post('branch','BranchController@store');

    route::get('branch/{id}','BranchController@branch');

    route::post('setting/itemname/create','SettingController@itemNameCeate');
    route::get('setting/itemname/{id}/del','SettingController@itemNameDel');

    route::post('setting/model/create','SettingController@modelCeate');
    route::get('setting/model/{id}/del','SettingController@modelDel');

    route::post('setting/color/create','SettingController@colorCeate');
    route::get('setting/color/{id}/del','SettingController@colorDel');

    route::post('setting/service/create','SettingController@w_shop_add');

    route::post('service/add','StockController@service_add');
    route::get('service/{id}/success','StockController@service_success');

    route::post('setting/type/add','SettingController@typeAdd');
    route::get('setting/type/{id}/del','SettingController@typeDel');

    route::post('setting/ltype/add','SettingController@ltypeAdd');
    route::get('setting/ltype/{id}/del','SettingController@ltypeDel');

    route::get('transfer','TransferController@index');
    route::post('transfer/{id}','TransferController@transfer');
    route::get('transfer/rec','TransferController@rec');

    route::get('sold/out/{id}','SaleController@soldout');

    


    Route::get('/', function () {
        if(Auth::user()->row == 1){
            return redirect('sale');
        }elseif(Auth::user()->row == 2 | Auth::user()->row == 3){
            return redirect('sale');
        }else{
            return redirect('stock');
        }
           
    });

});

