<header class="py-8 px-2 sm:px-10 border-b border-gray-200 sm:flex">
    <div class="flex items-center justify-between flex-1 mr-0 md:mr-28 lg:mr-56 2xl:mr-130">
        <div class="ml-4 lg:ml-36">
            <a href="/">
                <img src={{ asset('images/logo.png') }} alt="Logo" class="w-16 sm:w-24">
            </a>
        </div>
        <div class="-mt-1 ml-0 md:ml-5 p-3 rounded-full bg-green-100 hover:bg-green-200 transition ease-in duration-200">
            <h3 class="text-green-700 text-3xl font-semibold">
                Kay`s nature
            </h3>
        </div>
        <div class="sm:hidden mr-5">
            <button type="button" class="block" id="navbar-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div class="hidden sm:flex mr-0 sm:mr-32 ml-5 mt-2 sm:-mt-1 space-y-2 sm:space-y-0 flex-col 
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
