<div>
    @if (Session::has('shoppingCart') && Session::get('shoppingCart')->totalQuantity != 0)
        <div
        class="absolute flex text-white items-center justify-center {{ $mobileView == 'true' ? 'bottom-3 left-10' : 'top-7 right-1 lg:top-11 lg:right-9' }}  text-xs bg-light-green rounded-full h-6 w-6">
            {{ Session::get('shoppingCart')->totalQuantity }}
        </div>
    @endif
</div>
