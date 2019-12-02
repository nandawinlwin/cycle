@extends('layout.master')
@section('title','Stock View')
@section('content')


<br>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="panel-title">
      <p class="pull-left">View Product</p>
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
          <th style="text-align:center;font-size:12px">L-type</th>
          <th style="text-align:center;font-size:12px">Colour</th>
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
          <td>{{$product->l_type}}</td>
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

    <div class="well well-sm">
      <h4>
        <span class="text-danger">Sale Customer Name</span> - {{$product->sale_customer}}
        &nbsp&nbsp&nbsp / &nbsp&nbsp&nbsp
        <span class="text-danger">Phone No</span> - {{$product->sale_customer_phone}}
        &nbsp&nbsp&nbsp / &nbsp&nbsp&nbsp
        <span class="text-danger">Address</span> - {{$product->sale_customer_address}}
      </h4>
    </div>

    @if($product->remark == NULL)
    <div class="well well-sm">No Remark</div>
    @else
    <div class="well well-sm">{{$product->remark}}</div>
    @endif

    <hr>

    <div class="row">
      <div class="col-md-6">

        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                  Before Sale</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Table Start -->
                <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;font-size:12px">NO.</th>
                      <th style="text-align:center;font-size:12px">Other Charges</th>
                      <th style="text-align:center;font-size:12px">Remark</th>
                      <th style="text-align:center;font-size:12px">Date</th>
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
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <!-- Table End -->
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                  After Sale</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <!-- Table Start -->
                <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;font-size:12px">NO.</th>
                      <th style="text-align:center;font-size:12px">Other Charges</th>
                      <th style="text-align:center;font-size:12px">Remark</th>
                      <th style="text-align:center;font-size:12px">Date</th>
                    </tr>
                  </thead>

                  <tbody id="myTable">
                    <?php $id = 1 ?>
                    @foreach($other as $data)
                    @if($data->created_at > date('Y m d'))
                    <tr>
                      <td>{{$id}}</td>
                      <?php $id++ ?>
                      <td>{{$data->other_charges}}</td>
                      <td>{{$data->redmark}}</td>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
                <!-- Table End -->
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <br><br>

    <div>


    </div>


  </div>



</div>






@endsection