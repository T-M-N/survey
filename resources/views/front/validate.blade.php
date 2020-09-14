@extends('layouts.master')

@section('content')

<h1>Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le 
{{ date('d/m/Y') }} à {{ date('H:i', time())}}</h1>
<p>toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une
application toujours plus facile à utiliser, seul ou en famille.
Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse: 
</p>

<a href="{{ route('url', $url) }}">Voir réponse</a>

@endsection