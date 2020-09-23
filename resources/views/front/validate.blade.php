@extends('layouts.master')

@section('title')
    Page url finalisation sondage
@endsection

@section('content')
<div id="validateSurvey">
    <header class="p-3">
         <p><img src="/image/bigscreen_logo.png" alt="logo bigscreen" /></p>
    </header>
    <section class="p-5 bg-white">
        <h1>Merci d'avoir répondu à toutes les questions</h1>
        <p>Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le 
        <span>{{ date('d/m/Y') }} à {{ date('H:i', time())}}</span>
        <span>toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une
        application toujours plus facile à utiliser, seul ou en famille.</span>
        </p>
        <p>Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse : 
        <a href="{{ route('url', $url) }}">http://127.0.0.1:8000/reponse/{{ $url }}</a></p>
    </section>
</div>
@endsection
