<header class="py-8 px-2 sm:px-10 sm:flex sm:items-center sm:justify-between">
    <div class="grid grid-cols-12 items-center lg:ml-32">
        <div class="ml-4 lg:ml-0 col-span-3 col-start-1 md:col-span-2">
            <a href="/">
                <img src={{ asset('images/logo.png') }} alt="Logo" class="w-16 sm:w-24">
            </a>
        </div>
        <div
            class="-mt-1 ml-0 md:ml-5 p-3 flex items-center justify-center col-start-4 col-span-7 md:col-start-6 md:col-span-5 lg:col-span-4 lg:col-start-6 xl:col-start-8 xl:col-span-3 2xl:col-start-10 2xl:col-span-3 rounded-full bg-green-100 hover:bg-green-200 transition ease-in duration-200">
            <h3 class="text-green-700 text-3xl font-semibold">
                Kay`s nature
            </h3>
        </div>
        <div class="sm:hidden col-start-12">
            <button type="button" class="block" id="navbar-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div class="hidden sm:flex ml-5 mt-2 sm:-mt-1 space-y-2 sm:space-y-0 flex-col 
            sm:flex-row items-start sm:items-center sm:space-x-8 font-semibold text-gray-800"
        id="collapse-menu">
        <div class="p-3 w-full sm:w-auto rounded-full hover:bg-gray-100 transition ease-in duration-150">
            <a href="#kontakt">
                Kontakt
            </a>
        </div>
        @auth
            @if (auth()->user()->role === 'admin')
                <div class="p-3 w-full sm:w-auto rounded-full hover:bg-gray-100 transition ease-in duration-150">
                    <a href={{ route('admin.index') }}>
                        Administrátorský panel
                    </a>
                </div>
            @endif
            <div class="p-3 w-full sm:w-auto rounded-full hover:bg-gray-100 transition ease-in duration-150">
                <form action={{ route('login.destroy') }} method="post">
                    @csrf
                    <button type="submit" class="flex items-center">
                        Odlhásenie
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </button>
                </form>
            </div>
        @endauth
        @guest
            <div class="p-3 w-full sm:w-auto rounded-full hover:bg-gray-100 transition ease-in duration-150">
                <a href={{ route('login.create') }}>
                    Prihlásenie
                </a>
            </div>
        @endguest
        <livewire:shopping-cart-button />
    </div>
</header>
