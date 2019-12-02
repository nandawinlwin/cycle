@extends('layout.master')
@section('title','Stock')
@section('content')


<br>

<div class="btn-group btn-group-xs">
  @foreach($w_shop as $data)
    <a href="{{action('StockController@serviceview',$data->id)}}" class="btn btn-primary">{{$data->name}}</a>
  @endforeach
</div>

<a href="{{action('StockController@service_rec')}}" class="btn btn-xs btn-danger">ALL REC</a>

<br><br>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <div class="panel-title">
          <p class="pull-left">Service</p>

                <form action="{{action('StockController@service_add')}}" method="post">

                <div class="pull-right" style="margin-left:5px;">
                    <input type="submit" value="ADD" class="btn btn-primary">
                </div>

                <div class="pull-right" style="margin-left:5px;" >
                    <select name="shop_id" id="" class="form-control">
                        @foreach($w_shop as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class=" pull-right">
                <input type="text" name="fraim_no" style="width:300px;" class="form-control form-control" placeholder="Fraim No">
                </div>
                {{ csrf_field() }}
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
                    <th style="text-align:center;font-size:12px">Type</th>
                    <th style="text-align:center;font-size:12px">Service Shop</th>
                    <th style="text-align:center;font-size:12px">Out</th>
                    <th style="text-align:center;font-size:12px">In</th>
                    <th style="text-align:center;font-size:12px">More</th>
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
                    <th style="text-align:center;font-size:12px">Type</th>
                    <th style="text-align:center;font-size:12px">Service Shop</th>
                    <th style="text-align:center;font-size:12px">Out</th>
                    <th style="text-align:center;font-size:12px">In</th>
                    <th style="text-align:center;font-size:12px">More</th>
                  </tr>
                </tfoot>
                <tbody id="myTable">

                <?php $id = 1; ?>
                @foreach($service as $data)
                    @foreach($products as $p)
                      @if($data->product_id == $p->id && $data->success == NULL)
                        <tr>
                          <td>{{$id}}</td>
                          <td>
                            @foreach($item_name as $item)
                              @if($item->id == $p->item_name )
                                {{$item->name}}
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($item_model as $item)
                              @if($item->id == $p->item_model )
                                {{$item->name}}
                              @endif
                            @endforeach
                          </td>
                          <td>{{$p->cycle_no}}</td>
                          <td>{{$p->fraim_no}}</td>
                          <td>
                            @foreach($color as $item)
                              @if($item->id == $p->color )
                                {{$item->name}}
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($type as $item)
                              @if($item->id == $p->type )
                                {{$item->name}}
                              @endif
                            @endforeach
                          </td>
                          <td>
                            @foreach($w_shop as $item)
                              @if($item->id == $p->servece_shop )
                                {{$item->name}}
                              @endif
                            @endforeach
                          </td>
                          <td>{{$data->created_at}}</td>
                          <td>{{$data->updated_at}}</td>
                        </tr>
                        <?php $id++ ?>
                      @endif
                    @endforeach
                 @endforeach
                  
                </tbody>
              </table>
            <!-- Table End -->
    
        </div>
        
        
        
</div>


@endsection