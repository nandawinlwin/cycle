@extends('layout.master')
@section('title','Sale')
@section('content')


<br>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="panel-title">
      <p>Export</p>
    </div>
  </div>
  <div class="panel-body" style="">


    <div class="btn-group">
      <a href="{{action('ExportImport@exportProduct')}}" class="btn btn-primary">Now Stock</a>
      <a href="{{action('ExportImport@exportSoldout')}}" class="btn btn-primary">Sold Out Product</a>
      <a href="{{action('ExportImport@exportTransfer')}}" class="btn btn-primary">Transfer Record</a>
      <a href="{{action('ExportImport@exportOtherCharge')}}" class="btn btn-primary">Other Charges</a>
    </div>

    <div>

    </div>


    <h3>Stock Export</h3>
    <div class="row">
      <form action="" method="POST" role="form">

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">End Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Shop</label>
            <select name="" id="" class="form-control">
              <option value="">Branch 1</option>
              <option value="">Branch 2</option>
            </select>
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">.</label>
            <button type="submit" class="btn btn-primary form-control">Export</button>
          </div>

        </div>


      </form>
    </div>

    <hr>

    <h3>Sold Out Product Export</h3>
    <div class="row">
      <form action="" method="POST" role="form">

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">End Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Shop</label>
            <select name="" id="" class="form-control">
              <option value="">Branch 1</option>
              <option value="">Branch 2</option>
            </select>
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">.</label>
            <button type="submit" class="btn btn-primary form-control">Export</button>
          </div>

        </div>


      </form>
    </div>


    <hr>

    <h3>Transfer Record Export</h3>
    <div class="row">
      <form action="" method="POST" role="form">

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">End Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Shop</label>
            <select name="" id="" class="form-control">
              <option value="">Branch 1</option>
              <option value="">Branch 2</option>
            </select>
          </div>

        </div>


        <div class="col-md-2">

          <div class="form-group">
            <label for="">.</label>
            <button type="submit" class="btn btn-primary form-control">Export</button>
          </div>

        </div>


      </form>
    </div>

    <hr>

    <h3>Other Charges Export</h3>
    <div class="row">
      <form action="" method="POST" role="form">

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">End Date</label>
            <input type="date" name="" class="form-control" id="">
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">Shop</label>
            <select name="" id="" class="form-control">
              <option value="">Branch 1</option>
              <option value="">Branch 2</option>
            </select>
          </div>

        </div>

        <div class="col-md-2">

          <div class="form-group">
            <label for="">.</label>
            <button type="submit" class="btn btn-primary form-control">Export</button>
          </div>

        </div>


      </form>
    </div>




  </div>

</div>


@endsection