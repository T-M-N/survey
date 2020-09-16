<div class="left-nav justify-content-center align-items-center">
<img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="{{route('charts')}}">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('question')}}">Questionnaire</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('answer')}}">Réponses</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

</ul>
</div>