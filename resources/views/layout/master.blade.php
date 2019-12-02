<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/logo.png')}}" />
    <title>@yield('title')</title>


    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="{{asset('select2/select2.min.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body class="container-fluid" width style=":100%;">
    @include('layout.nav')

    @if(Auth::user()->desbale == 1 )

    <div style="text-align:center;">
        <H1 style="padding-top:250px;color:red;">SORRY</H1>
        <H1 style="color:red;"><u>You are account is " DESBALE "</u></H1>
    </div>

    @else

    <br><br><br>
    <div class="row">

        @if(Auth::user()->row != 4)
        <div class="col-md-2 col-sm-2 col-xs-2 hidden-sm hidden-xs">
            @include('list')
        </div>
        <div class="col-md-10 col-sm-12 col-xs-12 ">
            @yield('content')
        </div>
        @else
        <div class="col-md-12 col-sm-12 col-xs-12">
            @yield('content')
        </div>
        @endif


    </div>


    <script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.printPage.js')}}"></script>
    <script src="{{asset('assets/js/jquery.table2excel.js')}}"></script>
    <script src="{{asset('assets/js/jquery.table2excel.min.js')}}"></script>





    <script src="{{asset('select2/select2.min.js')}}"></script>

    <script>
        $("#item_name").select2({
            placeholder: "Select Item Name",
            allowClear: true
        });

        $("#item_model").select2({
            placeholder: "Select Item Model",
            allowClear: true
        });

        $("#color").select2({
            placeholder: "Select Color",
            allowClear: true
        });

        $("#type").select2({
            placeholder: "Select Type",
            allowClear: true
        });

        $("#l_type").select2({
            placeholder: "Select L Type",
            allowClear: true
        });


        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });


        function exportTableToExcel(tableID, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>

    @endif


</body>

</html>