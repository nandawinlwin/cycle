@extends('layout.master')
@section('title','Transfer Record')
@section('content')


<br>
<a href="{{url('transfer')}}" class="btn btn-xs btn-primary">Transfer</a><br><br>

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
            <table class="table table-bordered table-condensed table-hover fixed-top" style="width:100%;overflow: scroll;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Date</th>
                    <th style="text-align:center;font-size:12px">From</th>
                    <th style="text-align:center;font-size:12px">To</th>
                    <th style="text-align:center;font-size:12px">User</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th style="text-align:center;font-size:12px">NO.</th>
                    <th style="text-align:center;font-size:12px">Cycle No.</th>
                    <th style="text-align:center;font-size:12px">Frame No.</th>
                    <th style="text-align:center;font-size:12px">Date</th>
                    <th style="text-align:center;font-size:12px">From</th>
                    <th style="text-align:center;font-size:12px">To</th>
                    <th style="text-align:center;font-size:12px">User</th>
                  </tr>
                </tfoot>
                <tbody id="tblData">
                    <?php $id=1 ?>
                    @foreach($transfer as $data)
                      <tr>
                          <td>{{$id}}</td>
                          
                          <td>
                            @foreach($product as $p)
                                @if($data->product_id == $p->id)
                                  {{$p->cycle_no}}
                                @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($product as $p)
                                @if($data->product_id == $p->id)
                                  {{$p->fraim_no}}
                                @endif
                            @endforeach
                          </td>
                          <td>{{$data->created_at}}</td>
                          <td>
                            @foreach($shops as $shop)
                                @if($data->from == $shop->id)
                                  {{$shop->name}}
                                @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($shops as $shop)
                                @if($data->to == $shop->id)
                                  {{$shop->name}} 
                                @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($users as $user)
                                @if($data->user_id == $user->id)
                                  {{$user->name}}
                                @endif
                            @endforeach
                          </td>
                      </tr>
                      <?php $id++ ?>
                    @endforeach
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>

        <button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>
        
        
        
</div>


@endsection