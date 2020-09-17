@extends('layouts.back')

@section('title')
   Page liste des réponses de chaque utilisateur
@endsection

@section('content')
@if(count($userAnswers) == 0)
<table class="table">
    <tr>
        <td>Pas de réponse</td>
    </tr>
</table>
    @else
        @foreach($userAnswers as $userAnswer)
            @if(sizeof($userAnswer->answers) != 0)
                <h1>{{ $userAnswer->username }}</h1>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</td>
                            <th>QUESTIONS</th>
                            <th>REPONSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userAnswer->answers as $answer)
                        <tr>
                            <td>{{ $answer->question->id}}</td>
                            <td>{{ $answer->question->question_label}}</td>
                            <td>{{ $answer->option}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endforeach
    @endif
@endsection
