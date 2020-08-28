@extends('layouts.master')

@section('title')
Page sondage
@endsection

@section('content')
<div class="container">
    <div>
        <h1>Test</h1>

    @foreach($users as $user)
            <table>
                @foreach($questions as $question)
                @foreach($question->answers as $rep)
                <tr>

                    <td>{{$question->id}}</td>
                    <td>{{$question->question_label}}</td>
                    <td>{{$rep->option}}</td>

                </tr>
                @endforeach
                @endforeach
            </table>
    @endforeach

    </div>
</div>
@endsection