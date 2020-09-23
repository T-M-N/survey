<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/survey.css')}}" rel="stylesheet">
</head>
<body>
    
<div class="container">
 <div class="row">
    <div class="col-md-12">
        @yield('content')
    </div>
    </div>
</div>

@section('scripts')
<script src="{{asset('js/localhostURL.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/stateSurvey.js')}}"></script>
@show
</body>
</html>