@extends('layouts.back')

@section('title')
Page réponses
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

<style>
    .container-fluid {
        padding: 2em;
    }

    .row {
        width: 95%;
        max-width: 1200px;
        margin: auto !important;
    }

    .background {
        /* background-color:#353F47; */
        background: linear-gradient(77deg, rgba(2, 190, 110, 1) 0%, rgba(47, 203, 210, 1) 100%);
    }

    .table .thead-light th {
        background: transparent !important;
        border-color: #2fcbd2 !important;
    }
</style>