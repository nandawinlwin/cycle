@extends('layout.master')
@section('title','Buy')
@section('content')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Buy</div>
        <div class="panel-body">
           
        
        <form  method="POST" role="form">

            {{ csrf_field() }}

            <div class="row">
            

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Item Name</label>
                        <select name="item_name" id="" class="form-control">
                            @foreach($itemName as $data)
                                @if($product->item_name == $data->id )
                                <option value="{{$data->id}}" selected>{{$data->name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Model</label>
                        <select name="item_model" id="" class="form-control">
                            @foreach($itemModel as $data)
                                @if($product->item_model == $data->id )
                                <option value="{{$data->id}}" selected>{{$data->name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Color</label>
                        <select name="color" id="" class="form-control">
                            @foreach($color as $data)
                                @if($product->color == $data->id )
                                <option value="{{$data->id}}" selected>{{$data->name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endif
                            @endforeach
                        </select>   
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            @foreach($type as $data)
                                @if($product->type == $data->id )
                                <option value="{{$data->id}}" selected>{{$data->name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endif
                            @endforeach
                        </select>   
                    </div>
                </div>

                

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Cycle No.</label>
                        <input type="text" name="cycle_no" value="{{$product->cycle_no}}" class="form-control" id="" placeholder="00-0000">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Fraim No</label>
                        <input type="text" name="fraim_no" value="{{$product->fraim_no}}" class="form-control" id="" placeholder="Fraim No">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Purchases Date</label>
                        <input type="date" name="purchases_date" value="{{$product->purchases_date}}" class="form-control" id="" placeholder="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">L-type</label>
                        <select name="ltype" id="" class="form-control">
                            @foreach($ltype as $data)
                                @if($product->l_type == $data->id )
                                <option value="{{$data->id}}" selected>{{$data->name}}</option>
                                @else
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">EXP - Date</label>
                        <input type="date" name="exp_date" value="{{$product->ext_date}}" class="form-control" id="" placeholder="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Purchases Amount</label>
                        <input type="number" name="purchses_amount" value="{{$product->purchases_amount}}" class="form-control" id="" placeholder="Purcheses Amount">
                    </div>
                </div>
                

        
                </div>

                    <hr>
                <div class="row">
                     
                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$product->sale_customer}}" class="form-control" id="" placeholder="">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-group-sm">
                        <label for="">Phone No</label>
                        <input type="text" name="phone_no" value="{{$product->sale_customer_phone}}" class="form-control" id="" placeholder="09XXXXXXXXXX">
                    </div>
                </div>


                
                <div class="col-md-12">
                    <div class="form-group form-group-sm">
                        <label for="">Address</label>
                        <textarea class="form-control" value="{{$product->sale_customer_address}}" name="address" id=""></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group form-group-sm">
                        <label for="">Remark</label>
                        <textarea class="form-control" value="{{$product->remark}}" name="remark" id=""></textarea>
                    </div>
                </div>

                </div>

                <hr>

                

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
           
    
        </div>
        
        
        
</div>

@endsection