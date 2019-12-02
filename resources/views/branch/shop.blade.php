@extends('layout.master')
@section('title','Sale')
@section('content')

<style>
  #add_button {
    text-align: center;
    height: 150px;
    background-color: green;
    color: white;
  }

  #add_button:hover {
    background-color: #00ee62;
    color: black;
    cursor: pointer;
  }
</style>


<br>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="panel-title">Branch</div>
  </div>
  <div class="panel-body" style="height:450px; overflow: scroll;">

    <div class="row">

      @foreach($shop as $data)
      <a href="{{action('BranchController@branch',$data->id)}}">
        <div class="col-md-2 col-sm-3">
          <div class="well" style="text-align:center; height:150px;">
            <div class="badge badge-danger">
              <h2>&nbsp{{$data->id}}&nbsp</h2>
            </div>
            <h4>{{$data->name}}</h4>
          </div>
        </div>
      </a>
      @endforeach



      <div class="col-md-2 col-sm-3">
        <a data-toggle="modal" href="#shopModal" style="text-decoration: none;">
          <div class="well" style="" id="add_button">
            <div class="">
              <h2>&nbsp+&nbsp</h2>
            </div>
            <h4>ADD Shop</h4>
          </div>
        </a>
      </div>
    </div>



    <!-- Modal -->
    <div id="shopModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <form action="{{action('BranchController@store')}}" method="post">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">ADD Branch</h4>
            </div>
            <div class="modal-body">
              <label for="">Shop Name</label>
              <input type="text" name="name" class="form-control">
              {{ csrf_field() }}

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="ADD Branch">
            </div>
          </div>
        </form>

      </div>
    </div>
    <!-- Model End -->

  </div>





</div>


@endsection