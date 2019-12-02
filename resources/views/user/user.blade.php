@extends('layout.master')
@section('title','User')
@section('content')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
        <p class="pull-left">Users</p>
        <div class="pull-right">
            <a href="#addUserModal" data-toggle="modal" class="btn btn-primary">Add User</a>
             <!-- Modal -->
            <div class="modal fade" id="addUserModal" role="dialog">
                <div class="modal-dialog">

                <form action="{{action('UserController@create')}}" method="post">

                {{ csrf_field() }}
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <label for="">User Name</label>
                        <input class="form-control" type="text" name="name">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email">
                        <label for="">Password</label>
                        <input class="form-control" type="password" name="password">
                        <label for="">Password Confimation</label>
                        <input class="form-control" type="password" name="password_confimation">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add User">
                    </div>
                </div>

                </form>
                
                </div>
            </div>
        </div>
        <br><br>
    </div>
        <div class="panel-body table-responsive" style="overflow: auto;">

            <div id="">
            <form action="" method="post">
            <table  class="table table-bordered table-striped table-condensed table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Row</th>
                    <th>Shop</th>
                    <th style="width:180px;">More</th>
                </tr>
            </thead>
            <tbody>
            <?php $id = 1 ?>
            @foreach($users as $user)
                <?php $id++ ?>
                @if($auser->row <= $user->row || $user->row == NULL)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->row != null )
                            @foreach($rows as $data)
                                @if($data->id == $user->row)
                                    {{$data->name}}
                                @endif
                            @endforeach
                        @else
                            No Row
                        @endif
                    </td>
                    <td>
                        @if($user->shop_id != null )
                            @foreach($shop as $data)
                                @if($data->id == $user->shop_id)
                                    {{$data->name}}
                                @endif
                            @endforeach
                        @else
                            No Shop
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{action('UserController@edit',$user->id)}}" class="btn btn-xs btn-info">Edit</a>
                            @if($user->desbale == 1)

                            <a href="{{action('UserController@enabale',$user->id)}}" class="btn btn-xs btn-success">Enable</a>

                            @else

                            <a href="{{action('UserController@desbale',$user->id)}}" class="btn btn-xs btn-warning">Desbale</a>

                            @endif
                            <a href="{{action('UserController@destroy',$user->id)}}" class="btn btn-xs btn-danger">Del</a>
                        </div>
                    </td>
                </tr>

                @endif
        
            @endforeach

                
            </tbody>
        </table>

        </form>


       

        </div>

        </div>
        
        
        
</div>


@endsection