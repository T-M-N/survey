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
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/app.js')}}"></script>
    
    @show

    <style>
/* CSS général back admin */
body{
    background:#233040;
}
*{
    font-family: 'Sen', sans-serif;
}

a:hover{
    cursor: pointer !important;
}

.container-fluid{
    padding:2em;
}

.row{
    flex-direction: row-reverse;
}
.background{
    position: fixed;
    left:35px;
}

/* CSS Pour l'admin */
#backSurvey .container-fluid {
    padding: 2em;
}

.row#backSurvey {
    width: 95%;
    max-width: 1200px;
    margin: auto !important;
}

#backSurvey .background {
    background: linear-gradient(77deg, rgba(2, 190, 110, 1) 0%, rgba(47, 203, 210, 1) 100%);
}

#backSurvey .table .thead-light th {
    background: transparent !important;
    border-color: #2fcbd2 !important;
}
  </style>


</body>

</html>