@extends('layout.master')
@section('title','Credit')
@section('content')


<br>
<?php 

$amount = 0 ;
foreach($credit as $data){
  if($data->success != 1){
    $amount += $data->amount;
  }
}

?>

<h3>Credit Amount - {{$amount}} </h3>


<div class="panel panel-default">
    <!-- Default panel contents -->
    
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Credit</p>
          <div class="btn-group pull-right">
          <input type="text" style="width:300px;" id="myInput" class="form-control form-control">
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class="panel-body" style="height:450px; overflow: scroll;">


       <div class="btn-group">
       <a href="{{action('StockController@credit')}}" class="btn btn-danger">Credit</a>
       <a href="{{action('StockController@success')}}" class="btn btn-success">Success</a>
       </div> <br> <br>

          
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
                    <th style="text-align:center;font-size:12px">Credit</th>
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
                    <th style="text-align:center;font-size:12px">Credit</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">
                <?php $id = 1 ?>
                @foreach($credit as $c)
                @foreach($products as $product)
                @if($c->product_id == $product->id && $c->success != 1)
                <tr>
                  <td>{{$id}}</td>
                  <?php $id++ ?>
                  <td>{{$product->item_name}}</td>
                  <td>{{$product->item_model}}</td>
                  <td>{{$product->cycle_no}}</td>
                  <td>{{$product->fraim_no}}</td>
                  <td>{{$product->color}}</td>
                  <td>
                    @foreach($credit as $data)
                      @if($data->product_id == $product->id)
                          {{$data->amount}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                  @foreach($credit as $data)
                      @if($data->product_id == $product->id)

                       @if($data->success == 1)
                       <p class="text-success">Success</p>
                       @else
                       <a href="{{action('StockController@credit_success',$data->id)}}" class="btn btn-success btn-xs">Success</a>
                       @endif
                  
                     @endif
                  @endforeach
                  </td>
                </tr>
                @endif
                @endforeach
                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>


@endsection