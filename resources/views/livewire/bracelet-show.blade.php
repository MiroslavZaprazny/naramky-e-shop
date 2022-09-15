<x-app-layout>
    <div class="px-28 py-24">
        <a href={{ route('bracelet.index') }}
            class="flex hover:underline font-semibold text-gray-800 text-lg hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            Vrátiť sa na zobrazenie všetkých produktov
        </a>
    </div>
    <div class="px-24 pb-24">
        <div class="flex">
            <div class="grid grid-cols-6 gap-8 max-w-5xl flex-shrink-0">
                <img src={{ asset('images/test2.jpeg') }} alt="" class="rounded-lg col-span-3 object-contain">
                <img src={{ asset('images/test2.jpeg') }} alt="" class="rounded-lg col-span-3 object-contain">
                <img src={{ asset('images/test2.jpeg') }} alt="" class="rounded-lg col-span-3 object-contain"
                    style="width:463px; height:345px;">
            </div>
            <div class="description max-w-max ml-36">
                <h4 class="font-semibold text-3xl max-w-max text-gray-800">
                    {{ $bracelet->title }}
                </h4>
                <p class="mt-8 leading-8 text-gray-700">
                    {{ $bracelet->description }}
                </p>
                <button
                    class="flex items-center mt-8 px-5 py-3 rounded-full bg-light-green-500 text-gray-900 font-semibold hover:bg-dark-green-500 transition ease-in duration-200">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-5 h-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    Pridať do košíka
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
