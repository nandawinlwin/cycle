@extends('layout.master')
@section('title','User Edite')
@section('content')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Users</div>
        <div class="panel-body" style="">
            <form method="post">

            {{ csrf_field() }}
                
                <table class="table table-bordered">
                    <tr>
                        <td><h5>User Name - </h5></td>
                        <td><h5> {{$user->name}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5>Email - </h5></td>
                        <td><h5> {{$user->email}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5>User Row - </h5></td>
                        <td>
                            <select name="row" id="" class="form-control" style="width:200px;">
                                @foreach($rows as $data)
                                    @if($data->id == $user->row)
                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                    @else
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><h5>Branch - </h5></td>
                        <td>
                            <select name="shop" id="" class="form-control" style="width:200px;">
                                @foreach($shop as $data)
                                    @if($data->id == $user->shop_id)
                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                    @else
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>

                <input type="submit" value="Save User" class="btn btn-primary pull-right">
           
            </form>
            
        </div>

    </div>
        
        
        
</div>


@endsection