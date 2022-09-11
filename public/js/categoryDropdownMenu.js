const dropdownButton = document.getElementById('dropdown-button');
const chevron = document.getElementById('chevron');
let isDropDownMenuOpen = false;

dropdownButton.addEventListener('click', (e) => {
  isDropDownMenuOpen = !isDropDownMenuOpen;
  let [button, menu] = dropdownButton.parentNode.children

  chevron.classList.toggle('rotate')

  if (isDropDownMenuOpen === true) {
    menu.style.opacity = '1';
    dropdownButton.classList.remove('hover:bg-light-green-500');
    dropdownButton.style.backgroundColor = '#A0D995'
  } else {
    menu.style.opacity = '0';
    dropdownButton.style.backgroundColor = ''
    dropdownButton.classList.add('hover:bg-light-green-500');
  }
})