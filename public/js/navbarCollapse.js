const button = document.getElementById('navbar-toggle')
let isOpen = false;
const menu = document.getElementById('collapse-menu')

button.addEventListener('click', (e) => {
  isOpen = !isOpen;
  if (isOpen == true) {
    menu.style.display = 'flex';
  } else {
    menu.style.display = 'none'
  }
})