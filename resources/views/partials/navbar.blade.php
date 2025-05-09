<nav class="navbar">
    <div class="container">
        <ul class="left-nav">
            <a href="">Le club</a>
            <a href="">Equipes</a>
            <a href="">Partenaires</a>
        </ul>

        <a href="{{ route('home') }}" id="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
        </a>

        <ul class="right-nav">
            <a href="">Agenda</a>
            <a href="">Actualités</a>
            <a href="">Contacts</a>
        </ul>
    </div>
</nav>