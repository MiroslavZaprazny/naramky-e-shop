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
        <div
            class="p-3 rounded-full w-full sm:w-auto text-gray-800 hover:bg-gray-100 transition ease-in duration-150 cursor-pointer">
            <button class="sm:hidden">Košík</button>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 hidden sm:block">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
        </div>
    </div>
</header>
