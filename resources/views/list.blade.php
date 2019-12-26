<div style="" class="hidden-sm hidden-xs">

@if(Auth::user()->row == 1)

<div class="list-group">
    <a href="{{url('sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Sale
    </a>

    <a href="{{url('buy')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Buy
    </a>

    <a href="{{url('voucher/sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-duplicate"></span>&nbsp Voucher
    </a>

    <a href="{{url('sold/out/1')}}" class="list-group-item">
        <span class="glyphicon glyphicon-retweet"></span>&nbsp Sold Out
    </a>

    <a href="{{url('transfer')}}" class="list-group-item">
        <span class="glyphicon glyphicon-transfer"></span>&nbsp Transfer
    </a>

    <a href="{{url('stock')}}" class="list-group-item">
        <span class="glyphicon glyphicon-list"></span>&nbsp Stock
    </a>

    <a href="{{url('stock/other/charges')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus"></span>&nbsp Other Charges
    </a>

    <a href="{{url('credit')}}" class="list-group-item">
        <span class="glyphicon glyphicon-credit-card"></span>&nbsp Credit
    </a>


    <a href="{{url('service_rec')}}" class="list-group-item">
        <span class="glyphicon glyphicon-wrench"></span>&nbsp Service
    </a>


    <a href="{{url('branch')}}" class="list-group-item">
        <span class="fa fa-location-arrow"></span>&nbsp Branch
    </a>

    <a href="{{url('user')}}" class="list-group-item">
        <span class="glyphicon glyphicon-user"></span>&nbsp Users
    </a>

    <a href="{{url('importExportView')}}" class="list-group-item">
        <span class="glyphicon glyphicon-sort"></span>&nbsp Export Import
    </a>

    <a href="{{url('setting')}}" class="list-group-item">
        <span class="glyphicon glyphicon-cog"></span>&nbsp Setting
    </a>



</div>

@elseif(Auth::user()->row == 2)

<div class="list-group">
    <a href="{{url('sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Sale
    </a>

    <a href="{{url('buy')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Buy
    </a>

    <a href="{{url('voucher/sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-duplicate"></span>&nbsp Voucher
    </a>

    <a href="{{url('transfer')}}" class="list-group-item">
        <span class="glyphicon glyphicon-transfer"></span>&nbsp Transfer
    </a>

    <a href="{{url('stock')}}" class="list-group-item">
        <span class="glyphicon glyphicon-list"></span>&nbsp Stock
    </a>

    <a href="{{url('stock/other/charges')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus"></span>&nbsp Other Charges
    </a>

    <a href="{{url('credit')}}" class="list-group-item">
        <span class="glyphicon glyphicon-credit-card"></span>&nbsp Credit
    </a>


    <a href="{{url('service_rec')}}" class="list-group-item">
        <span class="glyphicon glyphicon-wrench"></span>&nbsp Service
    </a>


    <a href="{{url('branch')}}" class="list-group-item">
        <span class="fa fa-location-arrow"></span>&nbsp Branch
    </a>

    <a href="{{url('user')}}" class="list-group-item">
        <span class="glyphicon glyphicon-user"></span>&nbsp Users
    </a>

    <a href="{{url('setting')}}" class="list-group-item">
        <span class="glyphicon glyphicon-cog"></span>&nbsp Setting
    </a>



</div>

@elseif(Auth::user()->row == 3)

<div class="list-group">
    <a href="{{url('sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-shopping-cart"></span>&nbsp Sale
    </a>

    <a href="{{url('buy')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus-sign"></span>&nbsp Buy
    </a>

    <a href="{{url('voucher/sale')}}" class="list-group-item">
        <span class="glyphicon glyphicon-duplicate"></span>&nbsp Voucher
    </a>

    <a href="{{url('transfer')}}" class="list-group-item">
        <span class="glyphicon glyphicon-transfer"></span>&nbsp Transfer
    </a>

    <a href="{{url('stock')}}" class="list-group-item">
        <span class="glyphicon glyphicon-list"></span>&nbsp Stock
    </a>

    <a href="{{url('stock/other/charges')}}" class="list-group-item">
        <span class="glyphicon glyphicon-plus"></span>&nbsp Other Charges
    </a>

    <a href="{{url('credit')}}" class="list-group-item">
        <span class="glyphicon glyphicon-credit-card"></span>&nbsp Credit
    </a>

    
    <a href="{{url('service_rec')}}" class="list-group-item">
        <span class="glyphicon glyphicon-wrench"></span>&nbsp Service
    </a>

    <a href="{{url('setting')}}" class="list-group-item">
        <span class="glyphicon glyphicon-cog"></span>&nbsp Setting
    </a>



</div>
@endif


</div>