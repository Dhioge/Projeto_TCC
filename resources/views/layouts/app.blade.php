<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="{{ asset('/css/') }}/bootstrap.min.css" >
    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <!-- latest 5.0.13 june 2018, needs update -->
    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/') }}/sb-admin.css" rel="stylesheet">
</head>

@isset($bodyclass)
    <body class="{{$bodyclass}}/" id="page-top">
@endisset
@empty($bodyclass)
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
@endempty


@yield('body')

@empty($hidenav)
    @include('layouts.nav')
@endempty

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/js/') }}/jquery-3.3.1.slim.min.js" ></script>
<script src="{{ asset('/js/') }}/popper.min.js"></script>
<script src="{{ asset('/js/') }}/bootstrap.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/js/') }}/jquery.easing.compatibility.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/js/') }}/Chart.bundle.js"></script>

<script src="{{ asset('/vendor/') }}/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/vendor/') }}/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/js/') }}/sb-admin.js"></script>

<!-- Custom scripts for this page-->
<script src="{{ asset('/js/') }}/sb-admin-datatables.js"></script>
<script src="{{ asset('/js/') }}/sb-admin-charts.js"></script>

<script>
    $('#toggleNavPosition').click(function() {
        $('body').toggleClass('fixed-nav');
        $('nav').toggleClass('fixed-top static-top');
    });

    $('#toggleNavColor').click(function() {
        $('nav').toggleClass('navbar-dark navbar-light');
        $('nav').toggleClass('bg-dark bg-light');
        $('body').toggleClass('bg-dark bg-light');
    });
</script>

</body>
</html>