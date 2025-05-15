<nav class="navbar">
    <div class="layout-hflex space-between">
        <ul class="left-nav">
            <a href="#">Le club</a>
            <a href="">Equipes</a>
            <a href="">Partenaires</a>
        </ul>

        <a href="{{ route('home') }}" id="logo">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
        </a>

        <button class="menu-button"> 
            <img src="https://cdn.prod.website-files.com/675ea91cb6b7b8cc05ebcf92/675ea91cb6b7b8cc05ebd212_menu-btn.svg" alt="">
        </button>

        <ul class="right-nav">
            <a href="">Calendrier</a>
            <a href="">Actualités</a>
            <a href="">Contacts</a>
        </ul>
    </div>
</nav>