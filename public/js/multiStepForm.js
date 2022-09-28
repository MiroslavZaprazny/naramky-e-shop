const next = document.querySelectorAll('.next');
const prev = document.querySelectorAll('.prev');
const progress = document.querySelector('.progress');
const steps = document.querySelectorAll('.step')
const progressSteps = document.querySelectorAll('.progress-step');

let stepCount = 0;

next.forEach(btn => {
  btn.addEventListener('click', (e) => {
    stepCount++;
    updateSteps();
    updateProgressBar();
  })
})

prev.forEach(btn => {
  btn.addEventListener('click', (e) => {
    stepCount--;
    updateSteps();
    updateProgressBar();
  })
})

const updateSteps = () => {
  steps.forEach(step => {
    step.classList.contains('active') && step.classList.remove('active');
  })
  steps[stepCount].classList.add('active');
}

const updateProgressBar = () => {
  progressSteps.forEach((step, idx) => {
    if (idx <= stepCount) {
      step.classList.add('step-active')
    } else {
      step.classList.remove('step-active')
    }
  })
}
