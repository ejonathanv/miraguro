<header class="header" id="header">
    <div class="container flex justify-between items-center mx-auto">
        <div>
            <a href="/">
                <x-application-logo class="fill-current text-gray-500" />
            </a>
        </div>
        <nav class="nav">
            <a  href="{{ route('home') }}" 
                class="@if (request()->routeIs('home')) active @endif">
                ¿Quiénes somos?
            </a>
            <a  href="{{ route('services') }}"
                class="@if (request()->routeIs('services')) active @endif">
                Servicios
            </a>
            <a  href="{{ route('programs') }}"
                class="@if (request()->routeIs('programs')) active @endif">
                Programas
            </a>
        </nav>
        <div>
            <a href="{{ route('contact') }}" class="btn-blue">
                Contáctanos
            </a>
        </div>
    </div>
</header>