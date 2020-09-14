@extends('layouts.back')

@section('title')
Page sondage
@endsection

<div class="container-fluid">
    <div class="row" id="backSurvey">
      <div class="background shadow-sm p-3 mb-5 rounded  col-sm-4 d-flex justify-content-center align-items-center flex-column">
        @include('partials.menu')
     </div>
    <div class="col-sm-8 shadow-sm p-5 mb-5 bg-white rounded padding-2em">
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
</div>
