<header class="header" id="header">
    <div class="container flex justify-between items-center mx-auto">
        <div>
            <a href="/">
                <x-application-logo class="fill-current text-gray-500" />
            </a>
        </div>
        <nav class="nav hidden md:flex">
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
        <div class="hidden md:flex">
            <a href="{{ route('contact') }}" class="btn-blue">
                Contáctanos
            </a>
        </div>
        <div class="flex md:hidden">
            <a href="#" class="text-miraguro-green-dark text-2xl" id="movileMenuBtn">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
</header>

<div class="movileMenu relative" id="movileMenu">
    <a href="#" class="absolute top-10 right-3 p-4" id="movileMenuCloseBtn">
        <i class="fas fa-times text-white text-2xl"></i>
    </a>
    <nav>
        <a href="{{ route('home') }}" class="block py-4 px-6 text-center text-white bg-miraguro-green-dark">
            ¿Quiénes somos?
        </a>
        <a href="{{ route('services') }}" class="block py-4 px-6 text-center text-white bg-miraguro-green-dark">
            Servicios
        </a>
        <a href="{{ route('programs') }}" class="block py-4 px-6 text-center text-white bg-miraguro-green-dark">
            Programas
        </a>
        <a href="{{ route('contact') }}" class="block py-4 px-6 text-center text-white bg-miraguro-green-dark">
            Contáctanos
        </a>
    </nav>

    <p class="text-center text-white py-4 small">
        © {{ date('Y') }} Miraguro. Derechos Reservados.
    </p>
</div>