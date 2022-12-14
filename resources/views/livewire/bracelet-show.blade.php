<x-app-layout>
    <div class="px-4 py-12 lg:px-28 lg:py-24">
        <a href={{ route('bracelet.index') }}
            class="flex hover:underline font-semibold text-gray-800 text-lg hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            Vrátiť sa na zobrazenie všetkých produktov
        </a>
    </div>
    <div class="px-4 lg:px-24 pb-24">
        <div class="flex flex-col">
            <div class="grid grid-cols-6 gap-8 max-w-5xl flex-shrink-0">
                @foreach ($bracelet->images->toArray() as $image)
                    <img wire:key="{{ $bracelet['id'] }}" src={{ asset('images/bracelet-imgs/' . $image['filename']) }} alt=""
                        class="rounded-lg col-span-6 lg:col-span-3 object-cover" style="width:463px; height:345px;">
                @endforeach
            </div>
            <div class="description max-w-max mt-8 lg:mt-0 lg:ml-36">
                <h4 class="font-semibold text-3xl max-w-max text-gray-800">
                    {{ $bracelet->title }}
                </h4>
                <p class="mt-4 ml-1 text-gray-800 text-lg">
                    {{ $bracelet->price }} €
                </p>
                <p class="mt-8 leading-8 text-gray-700">
                    {{ $bracelet->description }}
                </p>
                @livewire('add-to-shopping-cart-form', ['bracelet' => $bracelet])
            </div>
        </div>
    </div>
</x-app-layout>
