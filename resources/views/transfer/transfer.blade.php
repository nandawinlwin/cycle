@extends('layout.master')
@section('title','Transfer')
@section('content')


<br>

<a href="{{url('transfer/rec')}}" class="btn btn-xs btn-primary">Transfer Record</a><br><br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Transfer</p>
          <div class="btn-group pull-right">
          <input type="text" style="width:300px;" id="myInput" class="form-control form-control">
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class="panel-body" style="height:450px; overflow: scroll;">

          
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="myTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Item Name</th>
                    <th style="text-align:center;font-size:12px">Model</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Colour</th>
                    <th style="text-align:center;font-size:12px">Transfer</th>
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
                    <th style="text-align:center;font-size:12px">Transfer</th>
                  </tr>
                </tfoot>
                <tbody id="tblData">
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
                  
                  <td>
                    <div class="row">
                      <form action="{{action('TransferController@transfer',$product->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-8">
                            <select name="shop_id" class="form-control form-control-xs pull-left">
                                  @foreach($shops as $shop)
                                      <option value="{{$shop->id}}">{{$shop->name}}</option>
                                  @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary btn-block  pull-right" value="Transfer">
                        </div>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>

        
        
        
        
</div>


@endsection