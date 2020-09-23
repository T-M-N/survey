@extends('layouts.master')

@section('title')
    Page réponse de l'utilisateur du sondage
@endsection

@section('content')
<div class="container p-3" id="app">
<div class="background-survey bg-white">
        <header class="p-3">
            <img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
            <h1>Liste de vos réponses</h1>
        </header>

        <div class="p-sondage col-mb-3">
        @foreach($userAnswer->answers as $answer)
                <h2> Questions {{ $answer->question->id }} /20</h2>
                <p>{{$answer->question->question_label}}</p>
        
                @if($answer->question->type =='A')
                <div class="option-dotted">
                <p>{{ $answer->option }}</p>
                </div>

                @elseif($answer->question->type == 'B')
                <div class="option-dotted">
                <p>{{ $answer->option }}</p>
                </div>

                @elseif($answer->question->type == 'C')
                <div class="option-dotted">
                <p>{{ $answer->option }}</p>
                </div>
            @endif
        @endforeach
        </div>    
</div>
</div>
@endsection