@extends('layout.master')
@section('title','Analysis')
@section('content')

<!-- PC View -->
<div class="">
            <br>
            <div class="row"><!-- Row -->
                  <div class="col-md-4 col-sm-12 col-xs-12"><!-- Col Md 4 -->
                        
                        <div class="panel panel-default"><!-- panel -->
                                <div class="panel-heading"><!--  -->
                                          <h3 class="panel-title">All</h3>
                                </div><!-- panel-heading -->
                                <div class="panel-body"><!--  -->
                                           <h1>{{count($product_all)}}</h1>
                                           All Sale - {{count($product_all_sale)}}
                                          @if(count($product_all_sale) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif
                                          <span class="">/</span>
                                           All Buy - {{count($product_all_buy)}}

                                          @if(count($product_all_buy) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif

                                </div><!-- panel body -->
                        </div><!-- panel -->
                        
                  </div><!-- Col Md 4 -->

                  <div class="col-md-4 col-sm-6 col-xs-6"><!-- Col Md 4 -->
                        
                        <div class="panel panel-default"><!-- panel -->
                                <div class="panel-heading"><!--  -->
                                          <h3 class="panel-title">Branch 1</h3>
                                </div><!-- panel-heading -->
                                <div class="panel-body"><!--  -->
                                          <h1>{{count($product_one)}}</h1>
                                          Sale - {{count($brand_one_sale)}} 
                                          @if(count($brand_one_sale) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif
                                          <span class="hidden-sm hidden-xs">/</span>
                                          <br class="hidden-md hidden-lg">
                                          Buy - {{count($brand_one_buy)}}
                                          @if(count($brand_one_buy) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif
                                </div><!-- panel body -->
                        </div><!-- panel -->
                        
                  </div><!-- Col Md 4 -->

                  <div class="col-md-4 col-sm-6 col-xs-6"><!-- Col Md 4 -->
                        
                        <div class="panel panel-default"><!-- panel -->
                                <div class="panel-heading"><!--  -->
                                          <h3 class="panel-title">Branch 2</h3>
                                </div><!-- panel-heading -->
                                <div class="panel-body"><!--  -->
                                          <h1>{{count($product_two)}}</h1>
                                          Sale - {{count($brand_two_sale)}} 
                                          @if(count($brand_two_sale) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif
                                          <span class="hidden-sm hidden-xs">/</span>
                                          <br class="hidden-md hidden-lg">
                                          Buy - {{count($brand_two_buy)}} 
                                          @if(count($brand_two_buy) <= 10 )
                                                <span class="glyphicon glyphicon-arrow-down" style="color:red;"></span>
                                          @else
                                                <span class="glyphicon glyphicon-arrow-up" style="color:green;"></span>
                                          @endif
                                </div><!-- panel body -->
                        </div><!-- panel -->
                        
                  </div><!-- Col Md 4 -->

                  
            </div><!-- Row -->

            <div class="panel panel-default">
                    <div class="panel-heading">
                              <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                              @foreach($name as $n)
                              <?php $i = 0; ?>
                              @foreach($product_all as $p)
                              <?php
                                    if($n->name == $p->item_name){
                                          $i++;
                                    }
                              ?>
                              @endforeach
                              <div class="col-md-3">
                                    <ul class="list-group">
                                          
                                          @if( $i <= 10)
                                          <li class="list-group-item list-group-item-danger">
                                                <span class="badge">{{$i}}</span>{{$n->name}}
                                          </li>
                                          @else
                                          <li class="list-group-item list-group-item-success">
                                                <span class="badge">{{$i}}</span>{{$n->name}}
                                          </li>
                                          @endif
                                    </ul>
                              </div><!-- Col 2 -->
                              @endforeach
                        </div>
                    </div>
            </div>


            
            <div class="panel panel-default">
                    <div class="panel-heading">
                              <h3 class="panel-title">Color</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                              @foreach($color as $c)
                              <?php $i = 0; ?>
                              @foreach($product_all as $p)
                              <?php
                                    if($c->name == $p->color){
                                          $i++;
                                    }
                              ?>
                              @endforeach
                              <div class="col-md-3">
                                    <ul class="list-group">
                                          
                                          @if( $i <= 10)
                                          <li class="list-group-item list-group-item-danger">
                                                <span class="badge">{{$i}}</span>{{$c->name}}
                                          </li>
                                          @else
                                          <li class="list-group-item list-group-item-success">
                                                <span class="badge">{{$i}}</span>{{$c->name}}
                                          </li>
                                          @endif
                                    </ul>
                              </div><!-- Col 2 -->
                              @endforeach
                        </div>
                    </div>
            </div>

            <div class="panel panel-default">
                    <div class="panel-heading">
                              <h3 class="panel-title">Model</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                              @foreach($model as $m)
                              <?php $i = 0; ?>
                              @foreach($product_all as $p)
                              <?php
                                    if($m->name == $p->item_model){
                                          $i++;
                                    }
                              ?>
                              @endforeach
                              <div class="col-md-3">
                                    <ul class="list-group">
                                          
                                          @if( $i <= 10)
                                          <li class="list-group-item list-group-item-danger">
                                                <span class="badge">{{$i}}</span>{{$m->name}}
                                          </li>
                                          @else
                                          <li class="list-group-item list-group-item-success">
                                                <span class="badge">{{$i}}</span>{{$m->name}}
                                          </li>
                                          @endif
                                    </ul>
                              </div><!-- Col 2 -->
                              @endforeach
                        </div>
                    </div>
            </div>

            <div class="panel panel-default">
                    <div class="panel-heading">
                              <h3 class="panel-title">Type</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                              @foreach($type as $t)
                              <?php $i = 0; ?>
                              @foreach($product_all as $p)
                              <?php
                                    if($t->name == $p->type){
                                          $i++;
                                    }
                              ?>
                              @endforeach
                              <div class="col-md-3">
                                    <ul class="list-group">
                                          
                                          @if( $i <= 10)
                                          <li class="list-group-item list-group-item-danger">
                                                <span class="badge">{{$i}}</span>{{$t->name}}
                                          </li>
                                          @else
                                          <li class="list-group-item list-group-item-success">
                                                <span class="badge">{{$i}}</span>{{$t->name}}
                                          </li>
                                          @endif
                                    </ul>
                              </div><!-- Col 2 -->
                              @endforeach
                        </div>
                    </div>
            </div>

            <div class="panel panel-default">
                    <div class="panel-heading">
                              <h3 class="panel-title">L type</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                              @foreach($ltype as $l)
                              <?php $i = 0; ?>
                              @foreach($product_all as $p)
                              <?php
                                    if($l->name == $p->l_type){
                                          $i++;
                                    }
                              ?>
                              @endforeach
                              <div class="col-md-3">
                                    <ul class="list-group">
                                          
                                          @if( $i <= 10)
                                          <li class="list-group-item list-group-item-danger">
                                                <span class="badge">{{$i}}</span>{{$l->name}}
                                          </li>
                                          @else
                                          <li class="list-group-item list-group-item-success">
                                                <span class="badge">{{$i}}</span>{{$l->name}}
                                          </li>
                                          @endif
                                    </ul>
                              </div><!-- Col 2 -->
                              @endforeach
                        </div>
                    </div>
            </div>



</div>   





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" >
      <div class="row">
<form action="" method="get" role="form">
      
      <div class="col-md-6 col-sm-4">
            <div class="form-group">
                  <label for="">Name</label>
                  <select class="form-control" name="name" id="">
                        <option value="0">All</option>
                        @foreach($name as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                  </select>
            </div>
      </div>


      <div class="col-md-6 col-sm-4">
            <div class="form-group">
                  <label for="">Model</label>
                  <select class="form-control" name="model" id="">
                        <option value="0">All</option>
                        @foreach($model as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                  </select>
            </div>
      </div>

      <div class="col-md-6 col-sm-4">
            <div class="form-group">
                  <label for="">Color</label>
                  <select class="form-control" name="color" id="">
                        <option value="0">All</option>
                        @foreach($color as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                  </select>
            </div>
      </div>

      <div class="col-md-6 col-sm-4">
            <div class="form-group">
                  <label for="">Type</label>
                  <select class="form-control" name="type" id="">
                        <option value="0">All</option>
                        @foreach($type as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                  </select>
            </div>
      </div>

      <div class="col-md-6 col-sm-4">
            <div class="form-group">
                  <label for="">L Type</label>
                  <select class="form-control" name="ltype" id="">
                              <option value="0">All</option>
                        @foreach($ltype as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                  </select>
            </div>
      </div>

</div>
      </div>
      <div class="modal-footer">
        <input type="submit"  class="btn btn-primary"  value="Filter">
      </div>
      </form>
    </div>

  </div>
</div>

 
@endsection