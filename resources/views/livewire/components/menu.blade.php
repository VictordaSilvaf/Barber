<div class="bg-blood-second w-full p-2 grid grid-cols-12 text-lightning-first font-dancingScript text-lg">
    <div class="ml-4 uppercase col-span-1 flex items-center">
        <p class="text-white">Barber</p>
    </div>

    <div class="w-full flex justify-center col-span-10 flex items-center gap-8">
        <livewire:components.menu-btn href="{{ route('home') }}" :active="request()->routeIs('home')">Inicio</livewire:components.menu-btn>
        <livewire:components.menu-btn href="{{ route('clientes') }}" :active="request()->routeIs('clientes')">Clientes</livewire:components.menu-btn>
        <livewire:components.menu-btn href="{{ route('saber-mais') }}" :active="request()->routeIs('saber-mais')">Saber mais</livewire:components.menu-btn>
        <livewire:components.menu-btn href="{{ route('contatos') }}" :active="request()->routeIs('contatos')">Contatos</livewire:components.menu-btn>
    </div>

    <div class="my-2 mr-4 w-full flex justify-end">
        @if (Route::has('login'))
            <div class="space-x-4 flex flex-row justify-center items-center ">
                @livewire('components.dark-theme-btn')
                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn-menu anime-up"
                    >
                        Sair
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="btn-menu anime-up">Logar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn-menu anime-up">Registrar</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
