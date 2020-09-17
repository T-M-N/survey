@extends('layouts.master')

@section('title')
    Page réponse de l'utilisateur du sondage
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