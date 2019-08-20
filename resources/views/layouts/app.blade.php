<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('') }}vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('') }}css/sb-admin.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('') }}vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('') }}vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('') }}vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('') }}vendor/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('') }}vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('') }}js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('') }}js/demo/datatables-demo.js"></script>
<script src="{{ asset('') }}js/demo/chart-area-demo.js"></script>
</body>
</html>
