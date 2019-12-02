
<nav class="navbar navbar-default  hidden-sm hidden-xs navbar-fixed-top" role="navigation">
<a class="navbar-brand " href="#"><img style="width:50px;margin-top: -15px; margin-right: -30px;" src="{{asset('img/logo.png')}}"></a>

    <ul class="nav navbar-nav hidden-sm hidden-xs">
        <li class="">
            <a href="#"> ကိုဖိုးလံုး ( ယိုးဒယား Auto ဆိုင္ကယ္ေရာင္းဝယ္ေရး )</a>
        </li>
       @if(Auth::user()->row == 4)
        <li class="hidden-sm hidden-xs"><a href="{{url('stock')}}"><span class="glyphicon glyphicon-list"></span>&nbsp Stock</a></li>
       @elseif(Auth::user()->row == 2 | Auth::user()->row == 3)
       <li class="hidden-sm hidden-xs"><a href="{{url('sale')}}"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Sale</a></li>
        <li class="hidden-sm hidden-xs"><a href="{{url('buy')}}"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Buy</a></li>
        <li class="hidden-sm hidden-xs"><a href="{{url('voucher/sale')}}"><span class="glyphicon glyphicon-duplicate"></span>&nbsp Brochure</a></li>
        <li class="hidden-sm hidden-xs"><a href="{{url('stock')}}"><span class="glyphicon glyphicon-list"></span>&nbsp Stock</a></li>
       @endif
    </ul>

        <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
            <li><a href="#"></a></li>
            <li><a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout &nbsp&nbsp&nbsp</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
           
        </ul>

</nav>


<nav class="navbar navbar-default navbar-right hidden-md hidden-lg navbar-fixed-top" role="navigation">
<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
  @if(Auth::user()->row == 4 )
  <a href="{{url('stock')}}"><span class="glyphicon glyphicon-list"></span>&nbsp Stock</a>
  @elseif(Auth::user()->row == 3 | Auth::user()->row == 2 )
  <a href="{{url('sale')}}"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Sale</a>
  <a href="{{url('buy')}}"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Buy</a>
  <a href="{{url('voucher/sale')}}"><span class="glyphicon glyphicon-duplicate"></span>&nbsp Brochure</a>
  <a href="{{url('stock')}}"><span class="glyphicon glyphicon-list"></span>&nbsp Stock</a>
  @elseif(Auth::user()->row == 1)
  <a href="{{url('analysis')}}"><span class="glyphicon glyphicon-signal"></span>&nbsp Analysis</a>
  <a href="{{url('branch')}}"><span class="fa fa-location-arrow"></span>&nbsp Branch</a>
  <a href="{{url('user')}}"><span class="glyphicon glyphicon-user"></span>&nbsp Users</a>
  <a href="{{url('stock')}}"><span class="glyphicon glyphicon-list"></span>&nbsp Stock</a>
  @endif
  <hr style="background-color:white;margin-left:20px;margin-right:20px">
  <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Log Out &nbsp&nbsp&nbsp</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</div>

<span style="cursor:pointer;" class="navbar-brand" onclick="openNav()">&nbsp &#9776; MENU </span>



</nav>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

