<div class="px-24 py-48">
    <h4 class="font-semibold text-2xl text-gray-800 text-center">
        Náramky dostupné na sklade
    </h4>
    <div class="main-section flex space-x-12">
        <div class="w-1/4">
            <div id="dropdown">
                <button
                    class="flex items-center font-semibold text-2xl text-gray-800 
                    hover:bg-light-green-500 hover:text-gray-900 py-3 px-4 
                    rounded-full transition ease-in duration-200"
                    id="dropdown-button">
                    Prírodné náramky
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-5 h-5 ml-2 transform ease-out duration-500" id="chevron">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="text-gray-700 space-y-3 
                    flex flex-col ml-2 mt-4 
                    opacity-0 transition 200ms ease-in transform translate-y-3 "
                    id="dropdown-items">
                    <button
                        class="py-2 px-4 hover:bg-light-green-500 rounded-full w-max transition ease-in duration-200">
                        Prírodné náramky
                    </button>
                    <button
                        class="py-2 px-4 hover:bg-light-green-500 rounded-full w-max transition ease-in duration-200">
                        Prírodné náramky so symbolom
                    </button>
                </div>
            </div>
        </div>

        <div class="main-section mt-16 grid grid-cols-8 gap-x-10 gap-y-8">
            <div
                class="flex flex-col h-96 col-span-3 col-start-1 bg-custom hover:bg-custom2 rounded-lg rounded-b-2xl items-center transition ease-in duration-300   cursor-pointer">
                <img src={{ asset('images/demo2.png') }} class="w-52 h-96 object-cover">
                <div
                    class="bg-custom2 pb-4 text-white flex flex-col justify-between rounded-t-2xl rounded-b-2xl w-full h-full px-4 py-3">
                    <p class="font-semibold">
                        Naramok z neviem coho pomaha na nieviem co
                    </p>
                    <div class="flex justify-between">
                        <p class="p-2 bg-gray-50 text-gray-900 rounded-full">
                            15e
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col h-96 col-span-3 bg-custom hover:bg-custom2 rounded-lg rounded-b-2xl items-center transition ease-in duration-300   cursor-pointer">
                <img src={{ asset('images/demo2.png') }} class="w-52 h-96 object-cover">
                <div
                    class="bg-custom2 pb-4 text-white flex flex-col justify-between rounded-t-2xl rounded-b-2xl w-full h-full px-4 py-3">
                    <p class="font-semibold">
                        Naramok z neviem coho pomaha na nieviem co
                    </p>
                    <div class="flex justify-between">
                        <p class="p-2 bg-gray-50 text-gray-900 rounded-full">
                            15e
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col h-96 bg-custom col-span-3 hover:bg-custom2 rounded-lg rounded-b-2xl items-center transition ease-in duration-300   cursor-pointer">
                <img src={{ asset('images/demo2.png') }} class="w-52 h-96 object-cover">
                <div
                    class="bg-custom2 pb-4 text-white flex flex-col justify-between rounded-t-2xl rounded-b-2xl w-full h-full px-4 py-3">
                    <p class="font-semibold">
                        Naramok z neviem coho pomaha na nieviem co
                    </p>
                    <div class="flex justify-between">
                        <p class="p-2 bg-gray-50 text-gray-900 rounded-full">
                            15e
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
