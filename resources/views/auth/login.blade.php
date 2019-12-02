<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    
</head>
<body class="container-fluid">
<div class="row">
    <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-4">
        
<div class="panel panel-default" style="margin-top:100px;">
          <div class="panel-heading">
               <div style="text-align:center;">
                    <img style="width:100px;" src="{{asset('img/logo.png')}}" alt="">
               </div>
          </div>
          <div class="panel-body">
            
          <form method="post" class="">

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                {{csrf_field()}}

                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" id="name" name="email" placeholder="Enter User Name">

                </div>
               
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>  

                <input type="hidden" id="ip" name="ip"><br>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
    </div>
    </div>
</div>
</div>

<script type="text/javascript">

	$.getJSON("http://jsonip.com?callback=?", function (data) {

	    
        document.getElementById('ip').value = data.ip;

	});

</script>
</body>
</html>