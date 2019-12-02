@extends('layout.master')
@section('title','Other Charges')
@section('content')


<br>

<a href="{{url('other/add')}}" class="btn btn-primary btn-sm">Add</a>
<br><br>

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
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Remark</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Other Charges</th>
                    <th style="text-align:center;font-size:12px">Remark</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">
                <?php $id = 1 ?>
                @foreach($other as $data)
                <tr>
                  <td>{{$id}}</td>
                  <?php $id++ ?>
                  @foreach($product as $p)
                      @if($data->product_id == $p->id)
                        <td>{{$p->fraim_no}}</td>
                        <td>{{$p->cycle_no}}</td>
                      @endif
                  @endforeach
                  <td>{{$data->other_charges}}</td>
                  <td>{{$data->redmark}}</td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs">Del</a>
                  </td>
                </tr>

                @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>


@endsection