@extends('layout.master')
@section('title','Sale')
@section('content')

<style>
    .notice {
        padding: 15px;
        background-color: #fafafa;
        border-left: 6px solid #7f7f84;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    }

    .notice-sm {
        padding: 10px;
        font-size: 80%;
    }

    .notice-lg {
        padding: 35px;
        font-size: large;
    }

    .notice-success {
        border-color: #80D651;
    }

    .notice-success>strong {
        color: #80D651;
    }

    .notice-info {
        border-color: #45ABCD;
    }

    .notice-info>strong {
        color: #45ABCD;
    }

    .notice-warning {
        border-color: #FEAF20;
    }

    .notice-warning>strong {
        color: #FEAF20;
    }

    .notice-danger {
        border-color: #d73814;
    }

    .notice-danger>strong {
        color: #d73814;
    }
</style>


<br>


<!-- Default panel contents -->

<div class="row">
    <div class="col-md-3">
        <div class="">
            <div class="notice notice-lg notice-success">
                <strong>Now Count</strong> - {{count($products)}}
            </div>
        </div>

    </div>

    <div class="col-md-3">
        <div class="">
            <div class="notice notice-lg notice-success">
                <strong>Today Sale Count</strong> - {{count($product_tody_sale)}}
            </div>
        </div>

    </div>


    <div class="col-md-3">
        <div class="">
            <div class="notice notice-lg notice-success">
                <strong>Today Buy Count</strong> - {{count($product_tody_buy)}}
            </div>
        </div>

    </div>

</div>


<div class="row">
    <div class="col-md-3">
        <div class="notice notice-info">
            <strong>Transfer - </strong> {{count($transfer)}}
        </div>
    </div>
    <div class="col-md-3">
        <div class="notice notice-info">
            <strong>Service - </strong> {{count($transfer)}}
        </div>
    </div>
</div>



<!-- PC View -->
<div class="">
    <br>


    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" href="#namePanel">
            <h3 class="panel-title">Name</h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="namePanel">
            <div class="row">
                @foreach($name as $n)
                <?php $i = 0; ?>
                @foreach($products as $p)
                <?php
                if ($n->name == $p->item_name) {
                    $i++;
                }
                ?>
                @endforeach
                <div class="col-md-3">
                    <ul class="list-group">

                        @if( $i <= 10) <li class="list-group-item list-group-item-danger">
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
        <div class="panel-heading" data-toggle="collapse" href="#colorPanel">
            <h3 class="panel-title">Color</h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="colorPanel">
            <div class="row">
                @foreach($color as $c)
                <?php $i = 0; ?>
                @foreach($products as $p)
                <?php
                if ($c->name == $p->color) {
                    $i++;
                }
                ?>
                @endforeach
                <div class="col-md-3">
                    <ul class="list-group">

                        @if( $i <= 10) <li class="list-group-item list-group-item-danger">
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
        <div class="panel-heading" data-toggle="collapse" href="#modelPanel">
            <h3 class="panel-title">Model</h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="modelPanel">
            <div class="row">
                @foreach($model as $m)
                <?php $i = 0; ?>
                @foreach($products as $p)
                <?php
                if ($m->name == $p->item_model) {
                    $i++;
                }
                ?>
                @endforeach
                <div class="col-md-3">
                    <ul class="list-group">

                        @if( $i <= 10) <li class="list-group-item list-group-item-danger">
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
        <div class="panel-heading" data-toggle="collapse" href="#typePanel">
            <h3 class="panel-title">Type</h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="typePanel">
            <div class="row">
                @foreach($type as $t)
                <?php $i = 0; ?>
                @foreach($products as $p)
                <?php
                if ($t->name == $p->type) {
                    $i++;
                }
                ?>
                @endforeach
                <div class="col-md-3">
                    <ul class="list-group">

                        @if( $i <= 10) <li class="list-group-item list-group-item-danger">
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
        <div class="panel-heading" data-toggle="collapse" href="#ltypePanel">
            <h3 class="panel-title">L type</h3>
        </div>
        <div class="panel-body panel-collapse collapse" id="ltypePanel">
            <div class="row">
                @foreach($ltype as $l)
                <?php $i = 0; ?>
                @foreach($products as $p)
                <?php
                if ($l->name == $p->l_type) {
                    $i++;
                }
                ?>
                @endforeach
                <div class="col-md-3">
                    <ul class="list-group">

                        @if( $i <= 10) <li class="list-group-item list-group-item-danger">
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


@endsection