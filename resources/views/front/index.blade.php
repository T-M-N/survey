@extends('layouts.master')

@section('title')
Page sondage
@endsection

@section('content')
  <div class="container">
    <div>
      <header>
       <img src="/image/bigscreen_logo.png" alt="logo bigscreen"/>
       <h1>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h1>
      </header>
      {{-- ne pas mettre de route pour celui la car dans la list route on a que le mot send du coup pas de chemin spécifique --}}
      <form action="{{ route('send.store') }}" method="post"  enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <!-- on a affiché la question d'abord 
        on a fait une boucle qui permet d'afficher toutes le squestions
        une fois dans foreach j'affiche question label
        afficher les options qui correspondent à chaque questions
        question -> answer représente un tableau des options rattaché à la question
        rep repésente obj rép
        la boucle foreach permet d'afficher la liste des options rattaché à la question
        -->
        @foreach($questions as $question)
            <div class="col-mb-3">
              <label for="question">
              {{$question->question_label}}
            </label>
            @if($question->type == 'A')
              <select id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                @foreach($question->answers as $rep)
                  <option value="{{$rep->id}}">{{$rep->option}}</option>
                @endforeach

                @error('question_{{ $question->id }}')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </select>

            @elseif($question->type == 'B')
            <input type="text" id="question_{{ $question->id }}" name="question_{{ $question->id }}" maxlength="255"/>

            @error('question_{{ $question->id }}')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @elseif($question->type == 'C')
                  <select id="question_{{ $question->id }}" name="question_{{ $question->id }}">
                    @for ($i = 1; $i < 6; $i++)
                      <option value={{ $i }}>{{$i}}</option>
                    @endfor        
                  </select>
                  @error('question_{{ $question->id }}')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              @endif
          </div> 

        @endforeach

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
@endsection
