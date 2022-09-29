@props(['name'])
<button type="button" class="prev flex items-center bg-dark-navy-blue hover:bg-light-navy-blue text-white rounded-lg px-6 py-3 transition ease-in duration-200">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-5 h-5 mr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
    {{ $name }}
</button>