@component('mail::message')
    # Vaša objevnávka č. {{ $order->id }} je potvrdená !

    Spracovali sme Vašu objednávku a pracujeme na jej odoslaní.

    Dodacie údaje
    {{ $customerPersonalInfo->first_name }} {{ $customerPersonalInfo->first_name }}
    {{ $customerPersonalInfo->address }} {{ $customerPersonalInfo->zip }} {{ $customerPersonalInfo->town }}

    Objednané položky
    @foreach ($orderItems as $item){{ $item->bracelet->title . ' ' . $item->qty . 'x' }} 
    @endforeach

    Doprava
    {{ $order->shipping }}

    Platba
    {{ $order->payment }}

    Celková cena
    {{ $order->total_price }} €

    Ďakujeme,
    Kay`s nature
@endcomponent
