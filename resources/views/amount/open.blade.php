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

<h4 class="text-success pull-left">Tody - {{$tody_money}}</h4>
<h4 class="text-success pull-right">TOTAL STOCK  - {{count($products_b1)}} / AMOUNT - {{$momey+$ot}}</h4>


<div class="clearfix">

</div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">ADD Cash</h3>
    </div>
    <div class="panel-body">
      
        
      <form method="POST" role="form">

        <div class="row">

          <div class="col-md-4">
          <div class="form-group">
            <label for="">Frame No.</label>
            <input type="text" name="f_no" class="form-control" id="" placeholder="Freame No.">
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label for="">Amount</label>
            <input type="number" name="amount" class="form-control" id="" placeholder="Amount">
          </div>
          </div>

        </div>

        <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Remark</label>
            <textarea name="remark" id="" cols="30" rows="5" class="form-control"></textarea>
          </div>
          </div>
        </div>

        <input type="submit" class="btn btn-primary pull-right" id="" value="ADD">
      
      </form>
        
      
    </div>
</div>


          
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