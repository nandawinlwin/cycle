@extends('layout.master')
@section('title','Stock')
@section('content')

<?php 

$f_name = 0;
$f_model = 0;
$f_color = 0;
$f_type = 0;
$f_l_type = 0;

?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <form action="">
            <div class="row">
                  <div class="col-md-3">
                       <div>
                              <select name="" id="item_name" class="form-control">
                                    <option value="0">All</option>
                                    @foreach($item_name as $data)
                                          <option value="{{$data->name}}">{{$data->name}}</option>
                                    @endforeach
                              </select>
                       </div>
                  </div>

                  <div class="col-md-3">
                       <div>
                              <select name="" id="item_model" class="form-control">
                                    <option value="0">All</option>
                                    @foreach($item_model as $data)
                                          <option value="{{$data->name}}">{{$data->name}}</option>
                                    @endforeach
                              </select>
                       </div>
                  </div>

                  <div class="col-md-3">
                       <div>
                              <select name="" id="color" class="form-control">
                                    <option value="0">All</option>
                                    @foreach($color as $data)
                                          <option value="{{$data->name}}">{{$data->name}}</option>
                                    @endforeach
                              </select>
                       </div>
                  </div>

                  <div class="col-md-3">
                       <div>
                              <select name="" id="type" class="form-control">
                                    <option value="0">All</option>
                                    @foreach($type as $data)
                                          <option value="{{$data->name}}">{{$data->name}}</option>
                                    @endforeach
                              </select>
                       </div>
                  </div>

                  <br><br>

                  <div class="col-md-3">
                       <div>
                              <select name="" id="l_type" class="form-control">
                                          <option value="0">All</option>
                                    @foreach($ltype as $data)
                                          <option value="{{$data->name}}">{{$data->name}}</option>
                                    @endforeach
                              </select>
                       </div>
                  </div>


                  <div class="col-md-3">
                       <div>
                              <input type="submit" class="btn btn-primary btn-block">
                       </div>
                  </div>
                  
                  
            </div>
          </form>
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
                    <th style="text-align:center;font-size:12px">EXP-Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Date</th>
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
                    <th style="text-align:center;font-size:12px">Ltype</th>
                    <th style="text-align:center;font-size:12px">EXP-Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Date</th>
                  </tr>
                </tfoot>
                <tbody id="myTable" id="dataTable">

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
                  
                  @endforeach
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>

<script>




</script>


@endsection