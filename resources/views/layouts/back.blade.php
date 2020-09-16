<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/menuStyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/backStyle.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid" id="app">
        <div class="row" id="backSurvey">
            <div
                class="background shadow-sm p-3 mb-5 rounded col-sm-4 d-flex flex-column align-items-center">
                @include('partials.menu')
            </div>
            <div class="col-sm-8 shadow-sm p-5 mb-5 bg-white rounded padding-2em">
                @yield('content')
            </div>
        </div>
    </div>
  
    @section('scripts')
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
        <script src="{{asset('js/stat.js')}}"></script>
    @show
</body>

</html>