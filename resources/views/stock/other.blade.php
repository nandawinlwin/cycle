@extends('layout.master')
@section('title','Add Other Charges')
@section('content')


<br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Other Charges</p>
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
                    <th style="text-align:center;font-size:12px">L-type</th>
                    <th style="text-align:center;font-size:12px">Purchases Date</th>
                    <th style="text-align:center;font-size:12px">Purchases Amount</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Total Purchases Amount</th>
                  </tr>
                </thead>
               
                <tbody id="myTable">

                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->item_name}}</td>
                  <td>{{$product->item_model}}</td>
                  <td>{{$product->cycle_no}}</td>
                  <td>{{$product->fraim_no}}</td>
                  <td>{{$product->color}}</td>
                  <td>{{$product->purchases_date }}</td>
                  <td>{{$product->purchases_amount}}</td>
                  <td>{{$total}}</td>
                  <td>{{$product->purchases_amount + $total}}</td>
                </tr>
                  
                </tbody>
              </table>
            <!-- Table End -->

            <hr>

            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Remark</th>
                    <th style="text-align:center;font-size:12px">Date</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </thead>
               
                <tbody id="myTable">
                <?php $id = 1 ?>
                @foreach($other as $data)
                  <tr>
                    <td>{{$id}}</td>
                    <?php $id++ ?>
                    <td>{{$data->other_charges}}</td>
                    <td>{{$data->redmark}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                      <a href="{{action('StockController@other_charges_del',$data->id)}}" class="btn btn-danger btn-sm">Del</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            <!-- Table End -->

            <form method="post">

            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-4">
                    <label for="">Other Charges</label>
                    <input type="text" name="other_charges" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Remark</label>
                    <textarea name="redmark" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-4">
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" value="Add">
                </div>
            </div>
            </form>
    
        </div>
        
        
        
</div>


@endsection