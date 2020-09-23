
<nav class="navbar position-fixed flex-column navbar-expand-lg navbar-light">
    <img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav flex-column nav-pills align-items-center">
            <li class="{{ (request()->is('administration/statistique')) ? 'active' : '' }} nav-item m-2">
                <a class="nav-link text-white" href="{{route('charts')}}">Accueil</a>
            </li>
            <li class="{{ (request()->is('administration/question')) ? 'active' : '' }} nav-item m-2">
               <a class="nav-link text-white" href="{{route('question')}}">Questionnaire</a>
            </li>
            <li class="{{ (request()->is('administration/reponse')) ? 'active' : '' }} nav-item m-2">
                <a class="nav-link text-white" href="{{route('answer')}}">Réponses</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>