@extends('layout.master')
@section('title','Voucher')
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
        <div class="panel-body" style="height:450px;overflow: scroll;">

        
        

          
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Voucher No</th>
                    <th style="text-align:center;font-size:12px">Amount</th>
                    @if($brochure->type == 'sale')
                    <th style="text-align:center;font-size:12px">Sale Date</th>
                    @elseif($brochure->type == 'buy')
                    <th style="text-align:center;font-size:12px">Byu Date</th>
                    @endif
                  </tr>
                </thead>
                <tbody id="myTable">
                <tr>
                  <td>{{$brochure->id}}</td>
                  <td>{{$brochure->brochures_no}}</td>
                  <td>
                  <?php 
                    $t = 0;
                    if($brochure->type == 'sale'){
                      foreach($credit as $data){
                        if($brochure->product_id == $data->product_id){
                          $t = $data->amount;
                        }
                      }
                    }
                  ?>
                  {{$brochure->amount + $t}}</td>
                  <td>{{$brochure->created_at}}</td>
                </tr>
                  
                </tbody>
              </table>
            <!-- Table End -->

            
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Item Name</th>
                    <th style="text-align:center;font-size:12px">Model</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No</th>
                    <th style="text-align:center;font-size:12px">Colour</th>
                    <th style="text-align:center;font-size:12px">EXP-Date</th>
                  
                  </tr>
                </thead>
                
                <tbody id="myTable">

                <tr>
                  <td>{{$product->id}}</td>
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
                  <td>{{$product->ext_date}}</td>
                  
                </tr>

                  
                </tbody>
              </table>
            <!-- Table End -->

            
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Customer Information</h3>
                </div>
                <div class="panel-body">
                    @if($brochure->type == 'sale')
                      <h4>
                        Name - {{$product->buy_customer}}   /
                        @if($product->buy_customer_phone !== null)
                          Phone - {{$product->buy_customer_phone}}   /  
                        @endif
                        @if($product->buy_customer_address !== null) 
                          Address {{$product->buy_customer_address}}
                        @endif
                      </h4>
                    @elseif($brochure->type == 'buy')
                      <h4>
                        Name - {{$product->sale_customer}}   /
                        @if($product->sale_customer_phone !== null) 
                          Phone - {{$product->buy_customer_phone}}   /  
                        @endif
                        @if($product->sale_customer_address !== null) 
                          Address {{$product->buy_customer_address}}
                        @endif
                      </h4>
                    @endif
                    
                </div> 
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Remark</h3>
                </div>
                <div class="panel-body">
                    
                    <h4>{{$brochure->remark}}</h4>
                    
                </div>
              </div>
            @if($brochure->type == 'sale')
            <div class="pull-right btn-group">
            <a href="{{action('BrochureController@printnow',$brochure->id)}}" class="btnprn btn btn-primary ">Print</a>
            <a href="{{action('BrochureController@printcopy',$brochure->id)}}" class="btnprn btn btn-primary ">Copy Print</a><br><br>
            </div>
            @elseif($brochure->type == 'buy')
            <div class="pull-right btn-group">
            <a href="{{action('BrochureController@printbuy',$brochure->id)}}" class="btnprn btn btn-primary ">Print</a>
            <a href="{{action('BrochureController@printcopy',$brochure->id)}}" class="btnprn btn btn-primary ">Copy Print</a><br><br>
            </div>
            @endif
        </div>


       


        
        <script type="text/javascript">
                $(document).ready(function(){
                $('.btnprn').printPage();
                });
        </script>
        

        
        
</div>


@endsection