<div>
    <div class="mx-auto border-2 border-custom2 rounded-xl max-w-3xl">
        <div class="border-b-2 border-custom2 py-3 px-5">
            <h3 class="font-semibold text-2xl">
                Váš nákupný košík
            </h3>
        </div>
        <div class="py-4 px-6">
            <div class="space-y-4">
                @forelse ((array)$items as $item)
                    <div class="flex justify-between  {{ $loop->last ? 'border-b-2 border-custom2 pb-2' : '' }}">
                        <a href={{ route('bracelet.show', $item['bracelet']['id']) }}
                            class="text-gray-900 font-semibold hover:underline">
                            {{ $item['bracelet']['title'] }}
                        </a>
                        <div class="flex items-center justify-center space-x-6">
                            <button wire:click="removeItemFromShoppingCart({{ json_encode($item) }})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </button>

                            <p>
                                {{ $item['qty'] }}
                            </p>
                            <button wire:click="addItemToShoppingCart({{ json_encode($item) }})">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                            </button>
                        </div>
                        <p>
                            {{ $item['price'] }} €
                        </p>
                    </div>
                @empty
                    <div class="flex items-center justify-center">
                        Váš nakupný košík je prázdny...
                        <span class="font-bold ml-2 hover:underline underline-offset-2">
                            <a href={{ route('bracelet.index') }}>
                                Prejdite na prehľad náramkov
                            </a>
                        </span>
                    </div>
                @endforelse
            </div>
            @if ($items)
                <div class="flex justify-between mt-3">
                    <div>
                        Celková cena:
                    </div>
                    <div>
                        {{ $cart['totalPrice'] }} €
                    </div>
                </div>
            @endif
        </div>
    </div>
    @if (Session::has('shoppingCart') && Session::get('shoppingCart')->totalQuantity != 0)
        <div class="ml-auto max-w-3xl -mr-7 mt-12">
            <button
                class="flex items-center bg-dark-green hover:bg-custom2 text-white px-3 py-4 rounded-full transition ease-in duration-200">
                Doprava a platba
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-5 h-5 ml-2 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </button>
        </div>
    @endif
</div>
