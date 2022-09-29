const next = document.querySelectorAll('.next');
const prev = document.querySelectorAll('.prev');
const progress = document.querySelector('.progress');
const steps = document.querySelectorAll('.step')
const progressSteps = document.querySelectorAll('.progress-step');

let stepCount = 0;

next.forEach(btn => {
  btn.addEventListener('click', (e) => {
    const step = e.target.closest('.step')
    const isValidated = validateInputs(step);

    if (isValidated === false) {
      return;
    }

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

  const activeProgressSteps = document.querySelectorAll('.step-active')

  console.log(activeProgressSteps);
  progress.style.width = ((activeProgressSteps.length - 1) / (progressSteps.length - 1)) * 100 + '%'
}

const validateInputs = (step) => {
  const inputs = step.querySelectorAll('input');
  let validationState = false;
  //first step validation
  if (stepCount === 0) {
    inputs.forEach(input => {
      const container = input.closest('div')
      const errorMsg = container.querySelector('.error-msg')
      if (input.value == '') {
        errorMsg.innerText = '';
        errorMsg.innerText = 'Toto pole je povinné';
        errorMsg.style.opacity = 1;

        setTimeout(() => {
          errorMsg.style.opacity = 0;
        }, 5000)

        validationState = false;
      } else if (input.type === 'email' && !validateEmail(input.value)) {
        errorMsg.innerText = '';
        errorMsg.innerText = 'Nesprávny formát emailu';
        errorMsg.style.opacity = 1;

        setTimeout(() => {
          errorMsg.style.opacity = 0;
        }, 5000)

        validationState = false;
      } else {
        errorMsg.style.opacity = 0;

        validationState = true;
      }
    })
    return validationState;
  }

  //second step validation
  if (stepCount === 1) {
    const container = inputs[0].closest('.step')
    const errorMsg = container.querySelector('.error-msg')
    if (inputs[0].checked === false && inputs[1].checked === false) {
      errorMsg.style.opacity = 1;

      setTimeout(() => {
        errorMsg.style.opacity = 0;
      }, 5000)

      validationState = false;
    } else {
      errorMsg.style.opacity = 0;
      validationState = true;
    }
    return validationState;
  }
  //third step validation
  if (stepCount === 2) {
    const container = inputs[0].closest('.step')
    const errorMsg = container.querySelector('.error-msg')
    if (inputs[0].checked === false && inputs[1].checked === false) {
      errorMsg.style.opacity = 1;

      setTimeout(() => {
        errorMsg.style.opacity = 0;
      }, 5000)

      validationState = false;
    } else {
      errorMsg.style.opacity = 0;
      validationState = true;
    }
    return validationState;

  }
}

const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

