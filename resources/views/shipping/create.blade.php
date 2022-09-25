<x-app-layout>
    <div class="flex justify-center">
        <div class="max-w-3xl">
            <h4 class="font-semibold text-3xl text-gray-700 text-center">
                Fakturačné údaje
            </h4>
            <div class="flex items-center justify-center space-x-4 mt-10">
                <div>
                    <label class="block font-semibold text-lg mb-1">Meno</label>
                    <input type="text" class="border rounded-md h-12 w-64 px-2">
                </div>
                <div>
                    <label class="block font-semibold text-lg mb-1">Priezvisko</label>
                    <input type="text" class="border rounded-md h-12 w-64 px-2">
                </div>
            </div>
            <div class="flex items-center justify-center space-x-4 mt-10">
                <div>
                    <label class="block font-semibold text-lg mb-1">Email</label>
                    <input type="email" class="border rounded-md h-12 w-64 px-2">
                </div>
                <div>
                    <label class="block font-semibold text-lg mb-1">Telefón</label>
                    <input type="text" class="border rounded-md h-12 w-64 px-2">
                </div>
            </div>
            <div class="mt-12">
                <h4 class="font-semibold text-3xl text-gray-700 text-center">
                    Doprava
                </h4>
                <button
                    class="packeta-selector-open border rounded-lg px-2 py-5 mt-4 font-semibold text-lg w-full hover:border-gray-700 hover:border-2 transition ease-in duration-200"
                    onclick="Packeta.Widget.pick(packetaApiKey, showSelectedPickupPoint, packetaOptions)">

                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <input type="radio" name="" id="packeta-radio" class="px-2 py-12">
                            <svg width="30" height="22" viewBox="0 0 30 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect fill="#BA1B02" x="0" y="0" width="30" height="22"
                                    rx="4">
                                </rect>
                                <path
                                    d="M14.736 3.5L8.333 5.994l.886.714 5.708-2.22 5.688 2.22.898-.749L15.131 3.5h-.395zm-1.389 2.166l5.087 2.262 1.703-.88-5.217-1.995-1.573.613zM9.696 7.082l5.23 2.59 2.065-1.056-4.993-2.425-2.302.891zm11.068-.17l-.694 5.824-5.028 4.53.205 1.158 5.62-5.074.17-.28.783-6.58-1.056.422zM8.817 13.091l.164.292 5.619 5.04.17-1.178-5.006-4.51-.715-5.83L8 6.49l.817 6.6z"
                                    fill="#FFF"></path>
                                <path fill="#D7D7D7" d="M9.634 7.185l.681 5.272 4.55 4.06-.258-6.355z"></path>
                                <path fill="#AAA"
                                    d="M14.981 16.517l.239-6.355 1.954-1.206-.088 3.1 1.267-.907.184-3.017 1.6-.947-.627 5.272z">
                                </path>
                            </svg>
                            <div>
                                Zásielkovňa - doručenie na odberné miesto
                            </div>
                        </div>
                        <div class="mr-6 text-md">
                            3 €
                        </div>
                    </div>
                </button>
                <div class="packeta-selector-value text-gray-500 font-semibold text-sm mt-4">
                </div>
            </div>
        </div>
        <div class="ml-52">
            <h4 class="text-center font-semibold text-xl">
                Tvoj kosik
            </h4>
        </div>
    </div>
</x-app-layout>

<script src="https://widget.packeta.com/v6/www/js/library.js"></script>
<script>
    const packetaOpenButton = document.querySelector('.packeta-selector-open');
    const packetaRadioButton = document.querySelector('#packeta-radio');

    packetaOpenButton.addEventListener('click', (e) => {
        packetaRadioButton.setAttribute('checked', true)
        packetaOpenButton.classList.add('border-gray-800', 'border-2')
    })
    const packetaApiKey = 'XXX XXX XXX';

    const packetaOptions = {
        valueFormat: "name,city,street"
    };

    function showSelectedPickupPoint(point) {
        // Add here an action on pickup point selection
        const saveElement = document.querySelector(".packeta-selector-value");
        const heading = '<h4 class="font-semibold text-lg"> Adresa odberného miesta </h4>';
        saveElement.innerText = '';
        if (point) {
            console.log(point);
            saveElement.innerText = "\n Adresa: " + point.street + " - " + point.place + "\n Mesto: " + point
                .city + "\n PSČ: " + point.zip;
            saveElement.insertAdjacentHTML('afterBegin', heading);
        };
    }
</script>
