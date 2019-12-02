@extends('layout.master')
@section('title','Stock')
@section('content')



<br>

<div class="btn-group">
  <a href="" class="btn btn-primary btn-sm">Chsh</a>
  <a href="" class="btn btn-primary btn-sm">Day</a>
  <a href="" class="btn btn-primary btn-sm">Week</a>
  <a href="" class="btn btn-primary btn-sm">Month</a>
</div>

<div>

<h1 class="text-success pull-left">NOW AMOUNT  - </h1>
<h1 class="text-success pull-right">TOTAL STOCK  - {{count($products)}} </h1>

<br><br><br><br>
<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Branch 1</h3>
    </div>
    <div class="panel-body">
      
      <table class="table table-condensed table-hover">
        <tbody>
          <tr>
            <td>STOCK COUNT</td>
            <td>{{count($products_b1)}}</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Sale</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Buy</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
      
    </div>
</div>
</div>



<div class="col-md-6">
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Branch 2</h3>
    </div>
    <div class="panel-body">
      
    <table class="table table-condensed table-hover">
        <tbody>
          <tr>
            <td>STOCK COUNT</td>
            <td>{{count($products_b2)}}</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Sale</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Buy</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
      
    </div>
</div>
</div>


</div>

</div>



<div class="panel panel-default clearfix">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Amount</p>
          <div class="btn-group pull-right">
          <input type="text" style="width:300px;" id="myInput" class="form-control form-control">
          </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class="panel-body" style="height:450px; overflow: scroll;">

        <div class="btn-group">

        
        <a class="btn btn-primary btn-sm" data-toggle="modal" href='#modal-id-in'>IN</a>
        <a class="btn btn-primary btn-sm" data-toggle="modal" href='#modal-id-out'>OUT</a>

        </div>
          
         <!-- In Model -->

          <div class="modal fade" id="modal-id-in">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{action('StockController@money_in_out')}}" method="post" class="form-group">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">IN</h4>
                </div>
                <div class="modal-body">

                  <label for="">In Money</label>
                  <input type="number" name="money" class="form-control"><br>

                  <label for="">Cycle No</label>
                  <input type="text" name="cycle_no" class="form-control"><br>

                  <input type="hidden" name="in_out" value="1">

                  <label for="">Remark</label>
                  <textarea name="redmark" id="" cols="30" rows="10" class="form-control"></textarea>
                  
                  {{ csrf_field() }}
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Save changes">
                </div>
                </form>
              </div>
            </div>
          </div>

         <!-- In Model IN -->
          
          <!-- In Model -->

          <div class="modal fade" id="modal-id-out">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{action('StockController@money_in_out')}}" method="post" class="form-group">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">OUT</h4>
                </div>
                <div class="modal-body">
                  

                      <label for="">OUT Money</label>
                      <input type="number" name="money" class="form-control"><br>

                      <label for="">Cycle No</label>
                      <input type="text" name="cycle_no" class="form-control"><br>

                      <input type="hidden" name="in_out" value="0">
                      
                      <label for="">Remark</label>
                      <textarea name="redmark" id="" cols="30" rows="10" class="form-control"></textarea>

                      {{ csrf_field() }}
                      
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Save changes">
                </div>

                </form>
              </div>
            </div>
          </div>

         <!-- In Model IN -->

        <br><br>

          
            <!-- Table Start -->
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px;width:50px;">NO.</th>
                    <th style="text-align:center;font-size:12px">Amount</th>
                    <th style="text-align:center;font-size:12px">Remark</th>
                    <th style="text-align:center;font-size:12px">IN/OUT</th>
                    <th style="text-align:center;font-size:12px">Cycle No</th>
                    <th style="text-align:center;font-size:12px">Date</th>
                    <th style="text-align:center;font-size:12px;width:50px;">More</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Amount</th>
                    <th style="text-align:center;font-size:12px">Remark</th>
                    <th style="text-align:center;font-size:12px">IN/OUT</th>
                    <th style="text-align:center;font-size:12px">Cycle No</th>
                    <th style="text-align:center;font-size:12px">Date</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">
                   
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>




@endsection