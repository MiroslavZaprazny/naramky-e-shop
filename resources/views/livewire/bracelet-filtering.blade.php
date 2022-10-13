<div class="w-full md:w-1/3 lg:w-1/5 md:ml-10 lg:ml-0 mt-12 md:mt-14 lg:mt-0">
    <div id="dropdown">
        <div>
            <button wire:click="setCategory('All')"
                class="items-center font-semibold text-2xl text-gray-800 
                    bg-dark-green-500 hover:text-gray-900 py-3 px-4 
                    rounded-full transition ease-in duration-200 hover:bg-light-green-500 mt-7 sm:mt-0 mb-6
                     {{ $category === 'All' ? 'hidden cursor-default' : 'flex cursor-pointer' }}">
                Vrátiť sa na všetky náramky
            </button>
            <button
                class="flex items-center font-semibold text-2xl text-gray-800 
                    hover:bg-light-green-500 hover:text-gray-900 py-3 px-4 
                    rounded-full transition ease-in duration-200 focus:bg-dark-green-500"
                id="dropdown-button">
                Prírodné náramky
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-5 h-5 ml-2 transform ease-out duration-500" id="chevron">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="text-gray-700 space-y-3 flex flex-col ml-2 mt-2 md:mt-4"
            id="dropdown-items" wire:ignore style="display: none; ">
            <div>
                <button type="button" id="button1" wire:click="setCategory('prirodne')"
                    class="py-2 px-4 hover:bg-light-green-500 focus:bg-light-green-500 rounded-full w-max cursor-default transition ease-in duration-200"
                    disabled>
                    Prírodné náramky
                </button>
            </div>
            <div>
                <button id="button2" wire:click="setCategory('prirodne_so_symbolom')"
                    class="py-2 px-4 hover:bg-light-green-500 focus:bg-light-green-500 rounded-full w-max cursor-default transition ease-in duration-200"
                    disabled>
                    Prírodné náramky so symbolom
                </button>
            </div>
        </div>
    </div>
</div>
