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

  //show seleceted shipping and payment options on order overview
  if (stepCount === 3) {
    const selectedDelivery = document.querySelector('input[name="shipping"]:checked').value;
    const selectedDeliveryContainer = document.querySelector('.selected-delivery');
    const priceContainer = document.querySelector('#price');
    const initialPrice = parseFloat(document.querySelector('#price').dataset.initialPrice);
    let finalPrice = initialPrice;
    selectedDeliveryContainer.innerHTML = '';

    if (selectedDelivery === 'packeta-dobierka') {
      const html =
        '<div class="flex justify-between items-center font-semibold text-lg"><div class="flex items-center space-x-2">' +
        '<svg width="30" height="22" viewBox="0 0 30 22" version="1.1" xmlns="http://www.w3.org/2000/svg">' +
        '<rect fill="#BA1B02" x="0" y="0" width="30" height="22" rx="4"></rect >' +
        '<path d="M14.736 3.5L8.333 5.994l.886.714 5.708-2.22 5.688 2.22.898-.749L15.131 3.5h-.395zm-1.389 2.166l5.087 2.262 1.703-.88-5.217-1.995-1.573.613zM9.696 7.082l5.23 2.59 2.065-1.056-4.993-2.425-2.302.891zm11.068-.17l-.694 5.824-5.028 4.53.205 1.158 5.62-5.074.17-.28.783-6.58-1.056.422zM8.817 13.091l.164.292 5.619 5.04.17-1.178-5.006-4.51-.715-5.83L8 6.49l.817 6.6z" fill="#FFF"></path>' +
        '<path fill = "#D7D7D7" d = "M9.634 7.185l.681 5.272 4.55 4.06-.258-6.355z" ></path>' +
        'path fill = "#AAA" d = "M14.981 16.517l.239-6.355 1.954-1.206-.088 3.1 1.267-.907.184-3.017 1.6-.947-.627 5.272z" ></path></svg>' +
        '<div>Zásielkovňa - doručenie na odberné miesto  </div> </div> <div class="mr-6 text-md"> 3,30 € </div> </div>'

      selectedDeliveryContainer.insertAdjacentHTML('afterbegin', html);
      finalPrice += 3.30;
    } else if (selectedDelivery === 'gls') {
      const html =
        '<div class="flex justify-between items-center font-semibold text-lg"><div class="flex items-center space-x-2">' +
        '<svg width="30" height="22" viewBox="0 0 30 22" version="1.1" xmlns="http://www.w3.org/2000/svg">' +
        '<rect fill="#061ab1" x="0" y="0" width="30" height="22" rx="4" fill-opacity="1"></rect>' +
        '<path class="st0" d="M28.525 14.098v-.095c.004-.003.004 0 .007 0v.094c0 .004-.003.004-.007 0z" fill="#fddb3f"></path>' +
        '<path class="st1" d="M28.532 14.003h-.007v-.068h.007v.068z" fill="#fdeb94"></path>' +
        '<path class="st2" d="M28.525 14.098h.007v.055c-.013-.017-.003-.036-.007-.056z" fill="#fee679"></path>' +
        '<path class="st3" d="M7.124 6.437a9.932 9.932 0 012.064.345l.107.039c.033.01.042.026.042.062V9.2l-.403-.117a9.34 9.34 0 00-1.3-.277A4.479 4.479 0 006.42 8.79a2.421 2.421 0 00-.988.329 1.82 1.82 0 00-.767.997 2.97 2.97 0 00-.143.845c-.01.257 0 .514.039.77a2.09 2.09 0 00.308.849 1.476 1.476 0 00.936.614 1.937 1.937 0 00.64.052 1.45 1.45 0 001.024-.51l.033-.046.003-.01c-.013-.006-.029-.003-.042-.003H5.918c-.036 0-.049-.006-.049-.045v-1.888c0-.036.01-.046.046-.046h4.316c.036 0 .045.01.045.045v4.664c0 .033-.006.043-.042.043H8.486c-.04 0-.046-.013-.046-.05l.01-1.228c0-.013 0-.029-.007-.045l-.035.068a2.298 2.298 0 01-.76.81 3.51 3.51 0 01-1.827.584c-.017.007-.033 0-.049.003h-.335a4.154 4.154 0 01-1.787-.419 3.877 3.877 0 01-1.908-2.32 4.745 4.745 0 01-.205-1.239l-.003-.156v-.474a4.654 4.654 0 01.49-2.054 4.453 4.453 0 011.47-1.635 4.74 4.74 0 011.033-.52 5.736 5.736 0 011.902-.348h.104c.022-.003.048.004.071-.003h.351c.023.01.049.003.072.003h.045c.02.01.036.004.052.01zM20.64 15.596a13.835 13.835 0 01-1.725-.16 6.767 6.767 0 01-.845-.191c-.033-.01-.042-.023-.042-.059v-2.33c0-.049 0-.049.045-.036a13.832 13.832 0 002.038.426c.237.03.478.049.718.055.215.007.43-.003.64-.042a.923.923 0 00.342-.127c.143-.09.205-.227.175-.383a.244.244 0 00-.12-.166.996.996 0 00-.325-.127l-1.063-.24a5.196 5.196 0 01-1.134-.367 2.542 2.542 0 01-.991-.784 2.327 2.327 0 01-.403-.965 3.136 3.136 0 01-.049-.578c0-.527.094-1.03.351-1.495a2.746 2.746 0 011.16-1.125c.364-.192.751-.312 1.154-.383a5.76 5.76 0 01.709-.078c.016-.007.032 0 .045-.004h.052c.023-.003.042.004.065-.003h.328c.023.01.049.003.072.003h.097a14.81 14.81 0 012.363.319c.065.016.065.02.065.084v2.207c0 .055-.006.059-.062.046a16.812 16.812 0 00-1.67-.319 12.805 12.805 0 00-.618-.065 5.03 5.03 0 00-.542-.006 1.21 1.21 0 00-.543.126c-.107.059-.192.14-.218.264-.03.133.023.243.143.321a.923.923 0 00.286.12c.293.075.585.14.88.212.27.065.544.123.807.211.377.127.738.29 1.056.536a2.22 2.22 0 01.748 1.001 2.925 2.925 0 01.162.748c.016.195.02.39.007.585a2.707 2.707 0 01-1.183 2.093 3.686 3.686 0 01-1.183.526 5.103 5.103 0 01-1.232.156h-.468c-.033-.006-.062 0-.091-.006z" fill="#fff" fill-opacity="1"></path>' +
        '<path class="st4" d="M28.532 14.175c-.02.052-.02.111-.03.166a1.479 1.479 0 01-.383.744 1.44 1.44 0 01-.884.459 1.466 1.466 0 01-1.258-.407c-.24-.227-.39-.51-.442-.838a1.476 1.476 0 01.345-1.232 1.414 1.414 0 01.887-.5 1.472 1.472 0 011.437.546c.194.237.298.513.324.819.007.022 0 .045.004.071v.091c.003.02-.004.04.003.059l-.003.022z" fill="#ffd101"></path>' +
        '<path class="st3" d="M11.177 11.013v-4.39c0-.04.01-.046.045-.046h2.753c.036 0 .042.01.042.045v6.465c0 .052 0 .052.052.052h3.006c.04 0 .046.01.046.045v2.223c0 .04-.013.046-.049.046h-5.85c-.042 0-.048-.01-.048-.052l.003-4.388z" fill="#fff" fill-opacity="1"></path></svg>' +
        '<div> GLS - doručenie kuriérom </div> </div> <div class="mr-6 text-md"> 4 € </div> </div>'

      selectedDeliveryContainer.insertAdjacentHTML('afterbegin', html);
      finalPrice += 4;
    }

    const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
    const selectedPaymentContainer = document.querySelector('.selected-payment');
    selectedPaymentContainer.innerHTML = '';

    if (selectedPayment === 'card') {
      const html =
        '<div class="flex justify-between items-center font-semibold text-lg"><div class="flex items-center space-x-2">' +
        '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">' +
        '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"></path></svg>' +
        '<div> Platba kartou </div> </div> <div class="mr-6 text-md"> Zadarmo </div> </div>'

      selectedPaymentContainer.insertAdjacentHTML('afterbegin', html);
    } else if (selectedPayment === 'cash') {
      const html =
        '<div class="flex justify-between items-center font-semibold text-lg"><div class="flex items-center space-x-2">' +
        '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-700">' +
        '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path></svg>' +
        '<div> Dobierka </div> </div> <div class="mr-6 text-md"> 1 € </div> </div>'

      selectedPaymentContainer.insertAdjacentHTML('afterbegin', html);

      finalPrice += 1;
    }

    const customerInfoContainer = document.querySelector('.customer-info');
    const customerFirstName = document.querySelector('input[name="first_name"]').value;
    const customerLastName = document.querySelector('input[name="last_name"]').value;
    const customerAddress = document.querySelector('input[name="address"]').value;
    const customerZip = document.querySelector('input[name="zip"]').value;
    const customerTown = document.querySelector('input[name="town"]').value;
    const customerEmail = document.querySelector('input[name="email"]').value;
    const customerPhone = document.querySelector('input[name="phone_number"]').value;
    customerInfoContainer.innerHTML = '';

    customerInfoContainer.insertAdjacentHTML('afterbegin',
      `<div class="font-semibold text-gray-600">
        <p> ${customerFirstName + ' ' + customerLastName} </p>
        <p> ${customerAddress} </p>
        <p> ${customerZip} </p>
        <p> ${customerTown} </p>
        <p> ${customerEmail} </p>
        <p> ${customerPhone} </p>
      </div>`
    )

    //update price
    priceContainer.innerText = finalPrice;
  }

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
