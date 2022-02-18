<header>
    <h1>Página Cursos</h1>

    <nav>
        <ul>
            <li>
                {{-- Si se esta en la ruta home entonces usa la clase para estilos active --}}
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                {{-- alt + 64 dump(request()->routeIs('home')) esto devuelve true si nos 
                encontramos en la ruta home, de lo contrario, retorna false --}}
            </li>

            {{-- El asterisco indica que puede ser cualquier vista en cursos --}}
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
        </ul>
    </nav>
</header>