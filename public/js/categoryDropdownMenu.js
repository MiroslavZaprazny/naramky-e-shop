const dropdownButton = document.getElementById('dropdown-button');
const chevron = document.getElementById('chevron');
const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');
let isDropDownMenuOpen = false;

dropdownButton.addEventListener('click', (e) => {
  isDropDownMenuOpen = !isDropDownMenuOpen;
  let menu = document.getElementById('dropdown-items');

  chevron.classList.toggle('rotate')

  if (isDropDownMenuOpen === true) {
    menu.style.opacity = '1';
    dropdownButton.classList.remove('hover:bg-light-green-500');
    button1.removeAttribute('disabled');
    button2.removeAttribute('disabled');
    button2.style.cursor = 'pointer'
    button1.style.cursor = 'pointer'
    button2.style.cursor = 'pointer'
  } else {
    menu.style.opacity = '0';
    dropdownButton.classList.add('hover:bg-light-green-500');
    button1.style.cursor = 'default'
    button2.style.cursor = 'default'
    button1.disabled = 'true';
    button2.disabled = 'true';
  }
})