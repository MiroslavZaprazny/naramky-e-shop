@component('mail::message')
    # Vaša objevnávka č. {{ $order->id }} je potvrdená

    toto je test 1234
    Zakaznicky mail

    {{-- @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent --}}

    Ďakujeme,
    Kay`s nature
@endcomponent
