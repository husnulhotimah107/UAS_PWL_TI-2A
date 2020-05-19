<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    {{-- <script src="{{URL::asset('js/jquery.min.js')}}"></script> --}}
    <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/bootstrap.min.css')}}">
    <title> @yield('title') </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('kontenluas')
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#listSekolah').DataTable();
        });
    </script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>

</html>