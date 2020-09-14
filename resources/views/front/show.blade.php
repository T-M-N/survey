@extends('layouts.master')

@section('title')
Page validation de sondage
@endsection

@section('content')
<div class="contentBack">
    <div>
        <header>
            <img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
            <h1>Liste de vos réponses</h1>
        </header>

     
        <div class="padding-2-em col-mb-3">
        @foreach($userAnswer->answers as $answer)
            <p>
                <label for="question">
                    <h2> Questions {{ $answer->question->id }} /20</h2>
                    <p>{{$answer->question->question_label}}</p>
                </label>
            </p>
        
            @if($answer->question->type =='A')
                <p>{{ $answer->option }}</p>
            
                @elseif($answer->question->type == 'B')
                <p>{{ $answer->option }}</p>

                @elseif($answer->question->type == 'C')
                <p>{{ $answer->option }}</p>
            @endif
        @endforeach
        </div>
    
    </div>
</div>
@endsection