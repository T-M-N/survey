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
/* CSS front*/
body{
    background-color: #233040;
}

a:hover{
    cursor: pointer !important;
}
form, .padding-2-em{
    padding:1em;
}
input, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

#valider{
    width: 200px;
    margin: auto;
}
input[type=submit] {
    width: 100%;
    background-color: #474747;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background: #ffffff;
    color:#233040;
}

label{
    color:#233040;
    font-size: 1.2em;
    margin:0;
}

.contentBack {
    background: #2fcbd2;
    /* background: linear-gradient(77deg, rgba(2, 190, 110, 1) 0%, rgb(47 203 210) 100%); */
    padding: 2em;
}

.contentBack h1{
    color:#233040;
    padding-left: 0.5em;
    font-size: 1.8em;
    font-weight: 700;
}

.contentBack h2{
    font-size: 1.2em;
    font-weight: 700;
}

.contentBack p{
    margin:0;
}

#survey select{
   border: 3px dashed #b7b7b7;
}
header img {
    width: 15rem;
}

.col-mb-3{
    margin-top:.5rem;
}

@media (min-width: 992px) {
.container {
max-width: 720px !important;
}
}

*{
    font-family: 'Sen', sans-serif;
}
</style>

</body>
</html>