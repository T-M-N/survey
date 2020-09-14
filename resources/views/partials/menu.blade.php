<img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="{{route('charts')}}">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('question')}}">Questionnaires</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('answer')}}">Réponse</a>
    </li>
    @extends('layouts.app')
</ul>

<style>
img{
    width:16rem;
}
 
ul{
    padding-top:1em;
}
li a {
    font-size: 1.3em;
    text-transform: uppercase;
    font-weight: 700;
    color:#212529;
    
}

li a:hover{
    color:#ffffff;
    text-decoration: none;
}
</style>
