<div class="px-5 lg:px-24 py-8 md:py-24">
    <h4 class="font-semibold text-3xl text-gray-800 text-center">
        Náramky dostupné na sklade
    </h4>
    <div
        class="main-section flex flex-col items-center justify-center md:items-start md:justify-start md:flex-row md:space-x-12">
        <livewire:bracelet-filtering />

        <div class="main-section mt-16 grid grid-cols-6 justify-center items-center md:gap-x-10 gap-y-8">
            @foreach ($bracelets as $bracelet)
                <a href={{ route('bracelet.show', ['id' => $bracelet->id]) }}
                    class="flex flex-col h-96 w-64 md:w-96 col-span-3 md:col-span-6 xl:col-span-3 lg:col-span-4 col-start-2 bg-custom hover:bg-custom2 rounded-lg rounded-b-2xl items-center transition ease-in duration-300">
                    <img src={{ asset($bracelet->thumbnail) }} class="w-52 h-96 object-cover">
                    <div
                        class="bg-custom2 pb-4 text-white flex flex-col justify-between rounded-t-2xl rounded-b-2xl w-full h-full px-4 py-3 cursor-pointer">
                        <p class="font-semibold">
                            {{ $bracelet->title }}
                        </p>
                        <div class="max-w-max">
                            <p class="p-2 bg-gray-50 text-gray-900 rounded-full">
                                {{ $bracelet->price }}€
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="pagination mt-24">
        {{ $bracelets->links() }}
    </div>
</div>
