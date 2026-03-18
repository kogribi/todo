<header>
    <nav>
        <ul>
            @guest
            <li><a href="/">Sākums</a></li>
            @endguest
            @auth
            <li><a href="/auth">Sākums</a></li>
            <li><a href="/todos">Visi uzdevumi</a></li>
            <li><a href="/todos/create">Izveidot uzdevumi</a></li>
            <li><a href="/diaries">Dienasgrāmata</a></li>
            <li><a href="/diaries/create">Izveidot dienasgrāmatas ierakstu</a></li>
            @endauth
        </ul>
    </nav>
</header>