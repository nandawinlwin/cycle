@extends('layout.master')
@section('title','Stock')
@section('content')

<br>


<div class="btn-group">
@foreach($shops as $shop)
  @if($shop->id == $auser->shop_id)
    <a class="btn btn-sm btn-primary" href="{{url('stock')}}">{{$shop->name}} <span class="badge text-success">Now</span></a>
  @else
    <a class="btn btn-sm btn-primary" href="{{action('StockController@branch_stock',$shop->id)}}">{{$shop->name}} <span class="badge text-primary">Other</span></a>
  @endif
@endforeach
</div>

<br><br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Stock</p>
          <div class="btn-group pull-right">
          <input type="text" style="width:300px;" id="myInput" class="form-control form-control">
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class="panel-body" style="height:450px; overflow: scroll;">

          
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Item Name</th>
                    <th style="text-align:center;font-size:12px">Model</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Colour</th>
                    <th style="text-align:center;font-size:12px">Lytpe</th>
                    <th style="text-align:center;font-size:12px">EXP-Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Amount</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Total Purchases Amount</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Item Name</th>
                    <th style="text-align:center;font-size:12px">Model</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Colour</th>
                    <th style="text-align:center;font-size:12px">Lytpe</th>
                    <th style="text-align:center;font-size:12px">EXP-Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Amount</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Total Purchases Amount</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">

                <?php $id = 1 ?>
                @foreach($products as $product)
                <tr>
                  <td>{{$id}}</td>
                  <?php $id++ ?>
                  @foreach($item_name as $data)
                    @if($data->id == $product->item_name )
                      <td>{{$data->name}}</td>
                    @endif
                  @endforeach
                  @foreach($item_model as $data)
                    @if($data->id == $product->item_model )
                      <td>{{$data->name}}</td>
                    @endif
                  @endforeach
                  <td>{{$product->cycle_no}}</td>
                  <td>{{$product->fraim_no}}</td>
                  @foreach($color as $data)
                    @if($data->id == $product->color )
                      <td>{{$data->name}}</td>
                    @endif
                  @endforeach
                   @foreach($ltype as $data)
                    @if($data->id == $product->l_type )
                      <td>{{$data->name}}</td>
                    @endif
                  @endforeach
                  <td>{{$product->ext_date}}</td>
                  <td>{{$product->purchases_date }}</td>
                  <td>{{$product->purchases_amount}}</td>
                  <td>
                    <?php $othercharges = 0 ?>
                    @foreach($other_charges as $data)
                    @if($data->product_id == $product->id)
                    <?php $othercharges+=$data->other_charges ?>
                    @endif
                    @endforeach
                    {{$othercharges}}
                  </td>
                  <?php
                    $other = 0;
                    foreach($other_charges as $data){
                      if($product->id == $data->product_id){
                        $other += $data->other_charges;
                      }
                    }
                  ?>
                  <td style="text-align:center;color:red;font-size:20px;">{{$product->purchases_amount + $other}}</td>
                  
                  <td>
                    <a href="{{action('StockController@view',$product->id)}}" class="btn btn-primary btn-xs">View</a>
                  </td>
                </tr>
                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>


@endsection