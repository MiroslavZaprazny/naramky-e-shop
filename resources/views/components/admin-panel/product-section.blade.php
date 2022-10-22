@if ($bracelets->isEmpty())
    <div class="grid place-items-center mt-24">
        <h4 class="font-semibold text-xl text-gray-700">
            Na sklade nie sú žiadne produkty...
        </h4>
    </div>
@else
    <x-admin-panel.products-table :bracelets="$bracelets" />
@endif
<x-admin-panel.modal />
