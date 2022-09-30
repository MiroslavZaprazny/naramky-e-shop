@component('mail::message')
    # Nová objevnávka č. {{ $order->id }} !!

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
@endcomponent
