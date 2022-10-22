<x-app-layout>
    <div class="px-24 py-12" x-data="{ show: false }">
        <div class="mb-10 w-40">
            <a href={{ route('bracelet.create') }}
                class="flex items-center bg-dark-navy-blue hover:bg-light-navy-blue text-white rounded-xl px-3 py-3 transition ease-in duration-200">
                Pridať náramok
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
            </a>
        </div>
        <x-admin-panel.product-section :bracelets="$bracelets" />
        <x-admin-panel.order-section :orders="$orders" />
    </div>
</x-app-layout>
