<header>
    <h1>Holiwis</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>

            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>