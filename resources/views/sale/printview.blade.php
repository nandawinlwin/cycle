<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ko Phone Lone</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    height: 20px;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #fdb400;
    color: white;
}

</style>

</head>

<body style="width:1000px;margin:auto;font-size:20px;">

<?php 
$aa = 0; 
foreach($credit as $data){
    $aa += $data->amount;
}
?>

<img style="width:1000px;" src="{{asset('assets/vimg.jpg')}}" alt="" srcset="">

<div style="float: left;">
<table>
    <tbody>
        <tr>
            <td>Name - </td>
            <td>
                @if($brochure->type == 'buy')
                    {{$product->sale_customer}}
                @elseif($brochure->type == 'sale')
                    {{$product->buy_customer}}
                @endif
            </td>
        </tr>
        <tr>
            <td>Phone No - </td>
            <td>
            @if($brochure->type == 'buy')
                {{$product->sale_customer_phone}}
            @elseif($brochure->type == 'sale')
                {{$product->buy_customer_phone}}
            @endif
            </td>
        </tr>
        <tr>
            <td>Address - </td>
            <td>
            @if($brochure->type == 'buy')
                {{$product->sale_customer_address}}
            @elseif($brochure->type == 'sale')
                {{$product->buy_customer_address}}
            @endif
            </td>
        </tr>
    </tbody>
</table>
</div>

<div style="float: right;">
    <table>
        <tr>
            <td>Invoice - @if($brochure->type == 'sale') S @elseif($brochure->type == 'buy') P @endif{{$brochure->brochures_no}} </td>
        </tr>
        <tr>
            <td>Date - {{date("d.m.Y")}}</td>
        </tr>
    </table>
</div>

<br><br><br><br>



<div class="col-md-4 col-xs-4 col-md-offset-2 col-xs-offset-2">


</div>

</div>

<br><br>



<table id="customers">
  <tr>
    <th id="tit">No</th>
    <th id="tit">Item Name</th>
    <th id="tit">Model</th>
    <th id="tit">Colour</th>
    <th id="tit">Cycle No</th>
    <th id="tit">Frame No</th>
    <th id="tit">Amount</th>
  </tr>
   <tr >
        <td id="item" >1</td>
        <td id="item" >{{$product->item_name}}</td>
        <td id="item" >{{$product->item_model}}</td>
        <td id="item" >{{$product->color}}</td>
        <td id="item" >{{$product->cycle_no}}</td>
        <td id="item" >{{$product->fraim_no}}</td>
        <td id="item" >{{$brochure->amount}} MMK</td>
    </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
  </tr>
  <tr>
      <td colspan="5"></td>
      <td>Total</td>
      <td>{{$brochure->amount}} MMK</td>
  </tr>
  <tr>
      <td colspan="5"></td>
      <td>Payment </td>
      <td>
      {{$brochure->amount-$aa}} MMK
      </td>
  </tr>
  <tr>
      <td colspan="5"></td>
      <td>Balance Due</td>
      <td>
      
      {{$aa}} @if($aa > 0) MMK @endif </td>
  </tr>
</table>


<p>Remark - {{$brochure->remark}}</p>

   <br><br><br><br> 

<div style="float: right;">
    <label for="">Seller</label>
    <table>
        <tr>
            <td>Signature - </td>
            <td>..................................</td>
        </tr>
        <tr>
            <td>Name - </td>
            <td>..................................</td>
        </tr>
    </table>
</div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.printPage.js')}}"></script>

       


</body>
</html>