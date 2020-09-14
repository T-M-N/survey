@extends('layouts.master')

@section('title')
Page sondage
@endsection

@section('content')
<div class="container">
    <div>
        <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</td>
                        <th scope="col">QUESTIONS</th>
                        <th scope="col">TYPE</th>
                    </tr>
                </thead>
               
                @foreach($questions as $question)
                <tbody>
                <tr>                   
                  
                   <td>{{$question->id}}</td>
                   <td>{{$question->question_label}}</td>
                   <td>{{$question->type}}</td>
                  
                </tr>
            </tbody>
                @endforeach               
            </table>
           
    </div>
</div>
@endsection