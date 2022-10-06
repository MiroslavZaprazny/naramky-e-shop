<x-app-layout>
    <div class="px-24 py-4">
        <div class="max-w-xs mx-auto">
            <h4 class="font-semibold text-gray-800 text-3xl text-center">
                Úprava {{ $bracelet->title }} !
            </h4>
            <form action={{ route('bracelet.update', $bracelet->id) }} method="post" class="mt-8"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex flex-col space-y-6">
                    <div>
                        <label class="block mb-1 w-max font-semibold">Názov</label>
                        <input type="text" name="title" class="border rounded-full py-4 px-2 w-96"
                            value={{ $bracelet->title }}>
                        @include('components.form-error-message', ['field' => 'title'])
                    </div>
                    <div>
                        <label class="block mb-1 w-max font-semibold">Categória</label>
                        <select name="category_name" class="border rounded-full w-96 px-2 py-4">
                            <option value="">Vyberte kategóriu...</option>
                            <option value="prirodne">Prírodné</option>
                            <option value="prirodne_so_symbolom">Prírodné so symbolom</option>
                        </select>
                        @include('components.form-error-message', ['field' => 'category_name'])
                    </div>
                    <div>
                        <label class="block mb-1 w-max font-semibold">Popis</label>
                        <textarea name="description" class="border w-96 h-40 px-2 py-2 resize-none rounded-2xl">{{ $bracelet->description }}</textarea>
                        @include('components.form-error-message', ['field' => 'description'])
                    </div>
                    <div class="flex items-center">
                        <div>
                            <label class="block mb-1 w-max font-semibold">Náhladová fotka</label>
                            <input type="file" name="thumbnail" class="border rounded-full py-4 px-5 w-96">
                        </div>
                        <img class="w-52 h-32 object-cover" src={{ asset($bracelet->thumbnail) }}>
                        @include('components.form-error-message', ['field' => 'thumbnail'])
                    </div>
                    <div>
                        <label class="block mb-1 w-max font-semibold">Ďalšie fotky</label>
                        <input type="file" name="pictures[]" class="border rounded-full py-4 px-5 w-96" multiple>
                        @include('components.form-error-message', ['field' => 'pictures'])
                        <div class="flex" style="flex-wrap: wrap;">
                            @foreach ($bracelet->images->toArray() as $picture)
                                <img class="block w-28 h-28 object-contain" src={{ asset($picture['filename']) }}>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <label class="block mb-1 w-max font-semibold">Cena</label>
                            <input type="number" name="price" class="border rounded-full py-2 px-4 w-20 h-12"
                                value={{ $bracelet->price }}>
                            @include('components.form-error-message', ['field' => 'price'])
                        </div>
                        <div>
                            <label class="block mb-1 w-max font-semibold">Počet na sklade</label>
                            <input type="number" name="qty_in_stock" class="border rounded-full py-2 px-4 w-20 h-12"
                                value={{ $bracelet->qty_in_stock }}>
                            @include('components.form-error-message', ['field' => 'price'])
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="flex items-center border rounded-xl bg-gray-700 hover:bg-gray-800 text-white px-5 py-3 mt-6 transition ease-in duration-200">
                    Pridať
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
