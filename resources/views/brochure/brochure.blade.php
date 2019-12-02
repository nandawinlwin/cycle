@extends('layout.master')
@section('title','Sale Brochure')
@section('content')


<br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Voucher</p>
          <div class="btn-group pull-right">
          <input type="text" style="width:300px;" id="myInput" class="form-control form-control">
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class="panel-body" style="height:450px; overflow: scroll;">

            <div class="btn-group">
                <a href="{{url('voucher/sale')}}" class="btn btn-sm btn-primary">Sale</a>
                <a href="{{url('voucher/buy')}}" class="btn btn-sm btn-info">Byu</a>
            </div>
            <br><br>

          
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Voucher No</th>
                    <th style="text-align:center;font-size:12px">Cycle No</th>
                    <th style="text-align:center;font-size:12px">Amount</th>
                    <th style="text-align:center;font-size:12px">Sale Date</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Voucher No</th>
                    <th style="text-align:center;font-size:12px">Cycle No</th>
                    <th style="text-align:center;font-size:12px">Amount</th>
                    <th style="text-align:center;font-size:12px">Sale Date</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">
                <?php $id =1 ?>

                @foreach($brochure as $data)
                <tr>
                  <td>{{$id}}</td>
                  <?php $id++; ?>
                  <td>S{{$data->brochures_no}}</td>
                  @foreach($products as $product)
                    @if($product->id == $data->product_id)
                    <td>{{$product->cycle_no}}</td>
                    @endif
                  @endforeach
                  <td>
                  <?php 
                    $a = 0;
                    foreach($credit as $c){
                      if($c->product_id == $data->product_id){
                        $a = $c->amount;
                      }
                    }
                  ?>
                  {{$data->amount+$a}}
                  </td>
                  <td>{{$data->updated_at}}</td>
                  

                  <td style="text-align:center">
                    <a href="{{action('BrochureController@show',$data->id)}}" class="btn btn-primary btn-xs">View</a>
                  </td>
                </tr>

                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>


@endsection