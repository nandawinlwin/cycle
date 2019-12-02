@extends('layout.master')
@section('title','Home')
@section('content')

<div class="panel panel-default">
    <!-- Default panel contents -->
        <div class="panel-heading">Setting</div>
        <div class="panel-body" style="">

            <div class="row">

            <div class="col-md-4 col-sm-6">
                    <!-- Panel Start -->
                    <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">Item Name</h3>
                          </div>
                          <div class="panel-body">
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($ItemName as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@itemNameDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@itemNameCeate')}}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->


                    
                     <!-- Panel Start -->
                     <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">Type</h3>
                          </div>
                          <div class="panel-body">
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($type as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@typeDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@typeAdd')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->


                    @if($auser->row < 3)
                    <!-- Panel Start -->
                    <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">User Row</h3>
                          </div>
                          <div class="panel-body">
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Row Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach($rows as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                            </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                               
                          </div>
                    </div>
                    <!-- Panel End -->

                    @endif


                   


                </div><!-- Col md 4 -->

                <div class="col-md-4 col-sm-6">
                    <!-- Panel Start -->
                    <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">Model </h3>
                          </div>
                          <div class="panel-body">
                                
                                 <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Model</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($model as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@modelDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@modelCeate')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->


                    
                     <!-- Panel Start -->
                     <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">L - Type</h3>
                          </div>
                          <div class="panel-body">
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>L Type</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ltype as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@ltypeDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@ltypeAdd')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->


                   




                    


                </div><!-- Col md 4 -->

                <div class="col-md-4 col-sm-6">
                    <!-- Panel Start -->
                    <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">Colour</h3>
                          </div>
                          <div class="panel-body">
                                
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Color Name</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($color as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@colorDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@colorCeate')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->


                    
                    <!-- Panel Start -->
                    <div class="panel panel-default">
                          <div class="panel-heading">
                                <h3 class="panel-title">W Shop </h3>
                          </div>
                          <div class="panel-body">
                                
                                 <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            @if($auser->row == 1)
                                            <th>Edit</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($w_shop as $name)
                                            <tr>
                                                <td>{{$name->id}}</td>
                                                <td>{{$name->name}}</td>
                                                @if($auser->row == 1)
                                                <td><a href="{{action('SettingController@modelDel',$name->id)}}" class="btn btn-xs btn-danger">Del</a></td>
                                                @endif
                                            </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                                
                                <form action="{{action('SettingController@w_shop_add')}}" method="post">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"> 
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="submit" value="ADD" class="form-control btn btn-primary">
                                    </div>
                                    
                                </form>
                          </div>
                    </div>
                    <!-- Panel End -->




                </div><!-- Col md 4 -->

                
            </div><!-- Row -->
      
        </div><!-- Panel Heading -->

</div><!-- Panel End -->



@endsection