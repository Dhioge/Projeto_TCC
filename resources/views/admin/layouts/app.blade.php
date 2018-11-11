<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Projeto') }}</title>
    <link rel="stylesheet" href="{{ asset('/css') }}/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/css') }}/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/css') }}/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('/css/') }}/bootstrap.min.css" > <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <!-- latest 5.0.13 june 2018, needs update -->
    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/') }}/sb-admin.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

@yield('body')

<script src="{{ asset('/js/') }}/jquery-3.3.1.slim.min.js" ></script>
<script src="{{ asset('/js/') }}/popper.min.js"></script>
<script src="{{ asset('/js/') }}/bootstrap.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/js/') }}/jquery.easing.compatibility.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/js/') }}/Chart.bundle.js"></script>
<script src="{{ asset('/vendor/') }}/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/vendor/') }}/datatables/dataTables.bootstrap4.js"></script>
<script src="{{ asset('/js/') }}/sb-admin.js"></script>

<!-- Custom scripts for this page-->
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


<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("js/Chart.js") }}"></script>
<script src="{{ asset("js/admin.js") }}"></script>
@yield('script')
@yield('script_excluir')
</body>
</html>