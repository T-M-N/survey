@extends('layouts.master')

@section('content')
<div id="validateSurvey" >
    <header>
         <p><img src="/image/bigscreen_logo.png" alt="logo bigscreen" /></p>
    </header>
    <section class="messageValidation">
        <h1>Merci d'avoir répondu aux questions</h1>
        <p>Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le 
        <span>{{ date('d/m/Y') }} à {{ date('H:i', time())}}</span>
        <span>toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une
        application toujours plus facile à utiliser, seul ou en famille.</span>
        </p>
        <p>Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: 
        <a href="{{ route('url', $url) }}">Accéder à vos réponses</a></p>
    </section>
</div>
@endsection
