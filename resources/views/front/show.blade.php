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

      @foreach($questions as $question)
        <div class="padding-2-em col-mb-3">
        
            <p><label for="question">
                    <h2> Questions {{ $question->id }} /20</h2>
                    <p>{{$question->question_label}}</p>
                </label></p>
        
            @if($question->type=='A')
            <select onchange="disabledForm()" id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                @foreach($question->answers as $rep)
                <option value="{{$rep->id}}">{{$rep->option}}</option>
                @endforeach
            </select>
        
            @elseif($question->type == 'B')
            <input onchange="disableForm()" type="text" id="question_{{ $question->id }}" name="question_{{ $question->id }}" />
            @if($errors->has('question_'.$question->id) ? 'is-invalid' : '') <span
                class="error bg-warning">{{ $errors->first('question_'.$question->id)}}</span> @endif
        
            @elseif($question->type == 'C')
            <select onchange="disableForm()" id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                @for ($i = 1; $i < 6; $i++) <option value={{ $i }}>{{$i}}</option>
                    @endfor
            </select>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection