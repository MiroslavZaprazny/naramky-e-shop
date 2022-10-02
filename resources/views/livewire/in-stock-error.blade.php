  <div>
      <div x-data="{ show: false, timeout: null }" x-init="Livewire.on('inStockError', () => {
          show = true
          setTimeout(() => {
              show = false
          }, 4000)
      })" x-show="show"
          x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
          x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
          class="fixed flex items-center justify-between bottom-3 right-3 rounded-lg border px-3 py-5 shadow-md w-96">
          <div class="flex items-center text-lg">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6 mr-2 text-orange-400">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
              </svg>
              Na sklade nie je dostatok produktu
          </div>
          <button @click="show = false">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
          </button>
      </div>
  </div>
