const next = document.querySelectorAll('.next');
const prev = document.querySelectorAll('.prev');
const progress = document.querySelector('.progress');
const steps = document.querySelectorAll('.step')

next.forEach(btn => {
  btn.addEventListener('click', (e) => {
    console.log('funguje to')
  })
})

