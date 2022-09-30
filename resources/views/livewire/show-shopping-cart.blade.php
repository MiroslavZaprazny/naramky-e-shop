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
        <div class="ml-auto max-w-3xl -mr-12 mt-12">
            <a href={{ route('order.create') }}
                class="flex items-center bg-dark-green hover:bg-custom2 text-white px-3 py-4 rounded-full transition ease-in duration-200 w-32">
                Checkout
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </a>
        </div>
    @endif
</div>
