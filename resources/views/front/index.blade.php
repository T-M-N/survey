@extends('layouts.master')

@section('title')
  Page sondage
@endsection

@section('content')
  <div class="container" id="app">
    <div id="survey" class='contentBack'>
      <header>
       <p><img src="/image/bigscreen_logo.png" alt="logo bigscreen"/></p>     
       <h1>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h1>
      </header>
      @if ($errors->any())
      <div class="alert alert-danger">
        <p>Tous les champs sont obilgatoires ou peut-être comporte t-il des erreurs !</p>
      </div>
      @endif
      {{-- ne pas mettre de route pour celui la car dans la list route on a que le mot send du coup pas de chemin spécifique --}}
      <form class="padding-2-em" action="{{ route('validation.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <!-- on a affiché la question d'abord 
        on a fait une boucle qui permet d'afficher toutes lesquestions
        une fois dans foreach j'affiche question label
        afficher les options qui correspondent à chaque questions
        question -> answer représente un tableau des options rattaché à la question
        rep repésente obj rép
        la boucle foreach permet d'afficher la liste des options rattaché à la question
        -->
          @foreach($questions as $question)
              <div class="col-mb-3">
              <h2> Questions {{ $question->id }} /20</h2>
              <label for="question">            
                {{$question->question_label}}
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
