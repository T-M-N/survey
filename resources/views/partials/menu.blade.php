{{-- <nav class="navbar  flex-column  align-items-start navbar-light bg-light">
    <img src="/image/bigscreen_logo.png" alt="logo bigscreen" />
    @if(Route::is('admin.*') == false)
    <ul class="tophatbar navbar flex-row navbar-nav mr-auto">

        <li class="{{ (request()->is('/')) ? 'active' : '' }} nav-item">
            <a class="nav-link" href="{{route('home')}}">Accueil <span class="sr-only"> (current) </span></a>
        </li>

        <li class="{{ (request()->is('solde')) ? 'active' : '' }} nav-item">
            <a class="nav-link" href="{{route('show_product_solde')}}"> Questionnaire<span class="sr-only"> (current)
                </span></a>
        </li>

        <li class="{{ (request()->is('solde')) ? 'active' : '' }} nav-item">
            <a class="nav-link" href="{{route('show_product_solde')}}"> Réponses<span class="sr-only"> (current)
                </span></a>
        </li>
    </ul>

    @else
    @endif
</nav> --}}