@extends('layouts.master')

@section('title')
  Page sondage
@endsection

@section('content')
  <div class="container" id="app">
    <div id="survey" class='background-survey bg-white'>
      <header class="p-3">
       <p><img src="/image/bigscreen_logo.png" alt="logo bigscreen"/></p>     
       <h1>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h1>
      </header>
      @if ($errors->any())
      <div class="alert alert-danger">
        <p>Je vous rappelle que toutes les questions sont obligatoires. Vérifier le formulaire peut-être comporte t-il des erreurs.</p>
      </div>
      @endif
      <form class="pt-2 pl-5 pb-2 pr-5" action="{{ route('validation.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
          @foreach($questions as $question)
              <div class="col-mb-3">
              <h2> Questions {{ $question->id }} /20</h2>
              <label for="question">            
                {{$question->question_label}} *
              </label>

              @if($question->type=='A' && $question->id!=3)
              <div class="option-dotted">
                <select  id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                  @foreach($question->answers as $answer)
                    <option value="{{$answer->id}}">{{$answer->option}}</option>
                  @endforeach
                </select>
              </div>
              
              @elseif($question->type == 'A' && $question->id=3)
             <div class="option-dotted">
              @foreach($question->answers as $answer)
                <input type="radio" id="question_{{ $question->id }}" value="{{$answer->id}}" name="question_{{ $question->id }}" /><span>{{ $answer->option }}</span>
              @endforeach
             </div>
              @if($errors->has('question_'.$question->id) ? 'is-invalid' : '') <span
                  class="error bg-warning">{{ $errors->first('question_'.$question->id)}}</span> @endif
              
              @elseif($question->type == 'B')
              <input  type="text" id="question_{{ $question->id }}" name="question_{{ $question->id }}"/>
              @if($errors->has('question_'.$question->id) ? 'is-invalid' : '') <span class="error bg-warning">{{ $errors->first('question_'.$question->id)}}</span> @endif
          
              @elseif($question->type == 'C')
                  <div class="option-dotted">
                    <select  id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                      @for ($i = 1; $i < 6; $i++)
                        <option value={{ $i }}>{{$i}}</option>
                      @endfor        
                    </select>
                  </div>
                @endif
            </div> 
          @endforeach
        <div id="valider">
            <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>
  </div>
@endsection
