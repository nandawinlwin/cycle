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
            

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Item Name</label>
                        <select name="item_name" id="item_name" class="form-control">
                                <option value="" selected disabled>Select Item Name</option>
                            @foreach($itemName as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Model</label>
                        <select name="item_model" id="item_model" class="form-control">
                                <option value="" selected disabled>Select Model</option>
                            @foreach($itemModel as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Colour</label>
                        <select name="color" id="color" class="form-control">
                                <option value="" selected disabled>Select Colour</option>
                            @foreach($color as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select>   
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Type</label>
                        <select name="type" id="type" class="form-control">
                                <option value="" selected disabled>Select Type</option>
                            @foreach($type as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select>   
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">L-type</label>
                        <select name="ltype" id="l_type" class="form-control">
                                <option value="" selected disabled>Select L Type</option>
                            @foreach($ltype as $data)
                                <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Cycle No.</label>
                        <input type="text" name="cycle_no" class="form-control" id="" placeholde  r="00-0000">
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Frame No</label>
                        <input type="text" name="fraim_no" class="form-control" id="" placeholder="Fraim No">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Purchases Date</label>
                        <input type="date" name="purchases_date" class="form-control" id="" placeholder="">
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">EXP - Date</label>
                        <input type="date" name="exp_date" class="form-control" id="" placeholder="">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Purchases Amount</label>
                        <input type="number" name="purchses_amount" class="form-control" id="" placeholder="Purcheses Amount">
                    </div>
                </div>
                

        
                </div>

                    <hr>
                <div class="row">
                     
                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Phone No</label>
                        <input type="text" name="phone_no" class="form-control" id="" placeholder="09XXXXXXXXXX">
                    </div>
                </div>


                
                <div class="col-md-12 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Address</label>
                        <textarea class="form-control" name="address" id=""></textarea>
                    </div>
                </div>

                <div class="col-md-12 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Remark</label>
                        <textarea class="form-control" name="remark" id=""></textarea>
                    </div>
                </div>

                </div>

                <hr>

                <div class="row">


                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Other Charges</label>
                        <input type="text" name="other_charges" class="form-control" id="" placeholder="Input field">
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="form-group form-group-sm">
                        <label for="">Remark</label>
                        <textarea name="redmark" class="form-control" id="" ></textarea>
                    </div>
                </div>

                
               

            </div>

            <button type="submit" class="btn btn-primary">Buy Now</button>
        </form>
        
           
    
        </div>
        
        
        
</div>




@endsection