const packetaOpenButton = document.querySelector('.packeta-selector-open');
const glsContainer = document.querySelector('#gls-container');
const packetaRadioButton = document.querySelector('#packeta-radio');
const glsRadioButton = document.querySelector('#gls');
const saveElement = document.querySelector(".packeta-selector-value");

glsContainer.addEventListener('click', (e) => {
  if (packetaRadioButton.checked === true) {
    packetaRadioButton.checked = false;
    packetaOpenButton.classList.remove('border-gray-800', 'border-2')
    saveElement.innerText = '';
  }
  glsRadioButton.checked = true;
  glsContainer.classList.add('border-gray-800', 'border-2')
})

packetaOpenButton.addEventListener('click', (e) => {
  if (glsRadioButton.checked === true) {
    glsRadioButton.checked = false;
    glsContainer.classList.remove('border-gray-800', 'border-2')
  }
  packetaRadioButton.checked = true;
  packetaOpenButton.classList.add('border-gray-800', 'border-2')
})
const packetaApiKey = 'XXX XXX XXX';

const packetaOptions = {
  valueFormat: "name,city,street"
};

function showSelectedPickupPoint(point) {
  // Add here an action on pickup point selection
  const heading = '<h4 class="font-semibold text-lg"> Adresa odberného miesta </h4>';
  saveElement.innerText = '';
  if (point) {
    console.log(point);
    saveElement.innerText = "\n Adresa: " + point.street + " - " + point.place + "\n Mesto: " + point
      .city + "\n PSČ: " + point.zip;
  };
}