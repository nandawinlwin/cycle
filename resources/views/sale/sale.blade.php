@extends('layout.master')
@section('title','Sale')
@section('content')


<br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Sale</p>
          <div class="btn-group pull-right">
            <input type="text" style="width:300px;" class="form-control form-control" id="myInput">
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
                    <th style="text-align:center;font-size:12px">Ltype</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                <?php $id = 1 ?>
                @foreach($products as $product)
                <tr>
                  <td>{{$id}}</td>
                  <?php $id++ ?>
                  <td>{{$product->item_name}}</td>
                  <td>{{$product->item_model}}</td>
                  <td>{{$product->cycle_no}}</td>
                  <td>{{$product->fraim_no}}</td>
                  <td>{{$product->color}}</td>
                  <td>{{$product->l_type }}</td>
                  
                  <?php
                    $other = 0;
                    foreach($other_charges as $data){
                      if($product->id == $data->product_id){
                        $other += $data->other_charges;
                      }
                    }
                  ?>
                  
                  <td style="text-align:center;"> 
                    <a href="{{action('SaleController@show',$product->id)}}" class="btn btn-info">Sale Now</a> 
                  </td>
                </tr>

                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>

      
        
        
        
</div>


@endsection