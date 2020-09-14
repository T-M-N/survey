@extends('layouts.master')

@section('title')
Page validation de sondage
@endsection

@section('content')
<div class="container">
    <div>
        <header>
            <img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
            <h1>Merci d'avoir répondu aux questions</h1>
        </header>
       @foreach($answers as $answer)
        <tr>
            <td>{{ $answer->option}}</td>
    
        </tr>
        @endforeach
    </div>
</div>
@endsection