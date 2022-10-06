    @props(['bracelet'])
    <button type="button" class="ml-9" id="delete-modal-open"
        @click="show = true; handleClick({{ $bracelet->id }}, '{{ $bracelet->title }}')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-7 h-7  text-red-500 hover:text-red-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>


    <script>
        function handleClick(id, name) {
            const container = document.querySelector('#hidden-inputs')
            const nameContainer = document.querySelector('#bracelet-name')
            nameContainer.innerHTML = name
            container.innerHTML = ''
            container.insertAdjacentHTML('beforeend', `<input type="hidden" name="id" value=${id}>`)
        }
    </script>
