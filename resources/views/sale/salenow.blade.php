@extends('layout.master')
@section('title','Sale Now')
@section('content')


<br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
                <h3>ကိုဖိုးလံုး ( ဆိုင္ကယ္ေရာင္း ဝယ္ေရး)</h3>

                
        </div>
    </div>
        <div class="panel-body" style="">


        <form action="{{action('SaleController@edit',$product->id)}}" method="post">

        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ဆိုင္ကယ္ အမ်ိဳးအစား</th>
                    <th>ေမာ္ဒယ္</th>
                    <th>ဆိုင္ငယ္ နံပါတ္</th>
                    <th>ဖရိန္နံပါတ္</th>
                    <th>အ ေရာင္</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$product->item_name}}</td>
                    <td>{{$product->item_model}}</td>
                    <td>{{$product->cycle_no}}</td>
                    <td>{{$product->fraim_no}}</td>
                    <td>{{$product->color}}</td>
                </tr>
            </tbody>
        </table>

       <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control">
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    <label for="">Credit</label>
                    <input type="number" name="credit" class="form-control">
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Customer Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" name="phone" class="form-control" placeholder="0900000000,0900000000">
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="" rows="2" class="form-control"></textarea>
                </div>
            </div>
       </div>

       <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Remark</label>
                    <textarea name="remark" id="" rows="2" class="form-control"></textarea>
                </div>
            </div>
       </div>

      
       
        

        {{ csrf_field() }}

        

            <input type="submit" class="btn btn-success pull-right" value="Sale Now">

            </form>
    
        </div>

      
        
        
        
</div>




@endsection