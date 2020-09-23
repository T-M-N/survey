@extends('layouts.back')

@section('title')
    Page liste des questions
@endsection

@section('content')
<div class="table-responsive">
    <h1 class="border-bottom">La liste des questions</h1>
    <table class="table table-striped table-bordered table-hover p-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</td>
                <th scope="col">QUESTIONS</th>
                <th scope="col">TYPE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{$question->id}}</td>
                    <td>{{$question->question_label}}</td>
                    <td>{{$question->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection