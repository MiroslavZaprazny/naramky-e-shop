const packetaOpenButton = document.querySelector('.packeta-selector-open');
const glsContainer = document.querySelector('#gls-container');
const packetaRadioButton = document.querySelector('#packeta-radio');
const glsRadioButton = document.querySelector('#gls');
const saveElement = document.querySelector(".packeta-selector-value");

glsContainer.addEventListener('click', (e) => {
  if (packetaRadioButton.checked === true) {
    packetaRadioButton.checked = false;
    packetaOpenButton.style = '';
    saveElement.innerText = '';
  }
  glsRadioButton.checked = true;
  glsContainer.style = 'border-color: rgb(31 41 55); border-width: 2px;';
})

packetaOpenButton.addEventListener('click', (e) => {
  if (glsRadioButton.checked === true) {
    glsRadioButton.checked = false;
    glsContainer.style = '';
  }
  packetaRadioButton.checked = true;
  packetaOpenButton.style = 'border-color: rgb(31 41 55); border-width: 2px;';
})
const packetaApiKey = 'XXX XXX XXX';

const packetaOptions = {
  valueFormat: "name,city,street"
};

function showSelectedPickupPoint(point) {
  const heading = '<h4 class="font-semibold text-lg"> Adresa odberného miesta </h4>';
  saveElement.innerText = '';
  if (point) {
    saveElement.innerText = "\n Adresa: " + point.street + " - " + point.place + "\n Mesto: " + point
      .city + "\n PSČ: " + point.zip;
    saveElement.insertAdjacentHTML('afterBegin', heading);
  };
}

//Payment methods
const cashContainer = document.getElementById('cash-container')
const cardContainer = document.getElementById('card-container')

const cash = document.getElementById('cash')
const card = document.getElementById('card')

cashContainer.addEventListener('click', (e) => {
  if (card.checked === true) {
    cardContainer.style = ''
  }
  cash.checked = true;
  cashContainer.style = 'border-color: rgb(31 41 55); border-width: 2px;';
})

cardContainer.addEventListener('click', (e) => {
  if (cash.checked === true) {
    cashContainer.style = ''
  }
  card.checked = true;
  cardContainer.style = 'border-color: rgb(31 41 55); border-width: 2px;';

})