@extends('layouts.master')

@section('title')
Page sondage
@endsection

@section('content')
<div class="container">
    <div>
        <h1>Test</h1>
           
            <table>
                @foreach($questions as $question)
                <tr>                   
                  
                   <td>{{$question->id}}</td>
                   <td>{{$question->question_label}}</td>
                   <td>{{$question->type}}</td>
                  
                </tr>
                @endforeach               
            </table>
           
    </div>
</div>
@endsection