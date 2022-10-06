<div class="bg-zinc-900 dark:bg-zinc-900 w-full p-2 flex items-center">
    <div class="text-white ml-4 uppercase">
        {{ config('app.name') }}
    </div>
    <div class="my-2 mr-4 w-full flex justify-end">

        @if (Route::has('login'))
            <div class="space-x-4 text-white flex flex-row">
                @livewire('components.dark-theme-btn')

                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="font-medium focus:outline-none focus:underline transition ease-in-out duration-150 p-2 text-center"
                    >
                        Sair
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="font-medium hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150 p-2 text-center">Logar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="font-medium hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150 p-2 text-center">Registrar</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
