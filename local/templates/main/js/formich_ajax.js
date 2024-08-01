/**
 *
 * Form
 *
 */


function disableDefaultInvalid() {
	// Выключает стандартные подсказки валидации
	document.addEventListener(
	  "invalid",
	  (function (e) {
	    return function (e) {
	      e.preventDefault();
	      const input = e.target.closest('.form-control');
	      setInputInvalid(input);

        if (e.target.form.querySelector('.is-invalid') == undefined) return
        e.target.form.querySelector('.is-invalid').focus();
	    };
	  })(),
	  true
	);
}
disableDefaultInvalid();

function setInputInvalid(input) {
  input = input.classList.contains('iti') ? input.parentElement : input;

  input.classList.add("is-invalid");
  const field = input.querySelector('[required]');

  let isValid;

  if (field.validity != null) {
  	isValid = field.validity.valid;
  } else if (field.checked) {
  	isValid = field.checked;
  }

  if (field.validationMessage) {
	  changeErrorText(input);
	}

  return isValid;
}

function setInputValid(input) {
  input.classList.remove("is-invalid");
  const field = input.querySelector("[required]");

  let isValid;
  if (field.validity != null) {
  	isValid = field.validity.valid;
  } else if (field.checked) {
  	isValid = field.checked;
  }

  if (field.validationMessage) {
	  changeErrorText(input);
  }
  return isValid;
}

function changeErrorText(input) {
  // return
  const field = input.querySelector("[required]");
  const error = input.querySelector(".input__message");
  if (error) {
    error.innerText = field.validationMessage;
  }
}

function validateInput(input) {
  // return
  // console.log(input)
  const field = input.querySelector("[required]");
  if (field == null) return;

  if (field.type == "tel") {
    return validatePhone(input);
  } else if (field.type == "email") {
    return validateEmail(input);
  } else {
    return validateInputLength(input);
  }
}

function validateInputLength(input) {
  // return
  const field = input.querySelector("[required]");
  if (field.value.length == 0) {
    return setInputInvalid(input);
  } else {
    return setInputValid(input);
  }
}

function validatePhone(input) {
  // return
  const field = input.querySelector("[required]");
  let regex = /^(\+7|8)?[\-\s]?\(?\d{3}\)?[\-\s]?\d{3}[\-\s]?\d{2}[\-\s]?\d{2}$/;
  if (!regex.test(field.value)) {
    return setInputInvalid(input);
  } else {
    return setInputValid(input);
  }
}

function validateEmail(input) {
  // return
  const field = input.querySelector("[required]");
  let regex =
    // eslint-disable-next-line no-control-regex
    /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
  if (!regex.test(field.value)) {
    return setInputInvalid(input);
  } else {
    return setInputValid(input);
  }
}


function serealizeForm(formNode) {
  const inputs = [...formNode.querySelectorAll('input')];
  const selects = [...formNode.querySelectorAll('select')];
  const textareas = [...formNode.querySelectorAll('textarea')];

  const formData = {};
   // Обработка полей input
  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];
    formData[input.name] = input.value;
  }

  // Обработка полей select
  for (let i = 0; i < selects.length; i++) {
    const select = selects[i];
    formData[select.name] = select.value;
  }

  // Обработка полей textarea
  for (let i = 0; i < textareas.length; i++) {
    const textarea = textareas[i];
    formData[textarea.name] = textarea.value;
  }

  return formData; 

}

function getFormData(serealizedForm) {
  const formData = new FormData();
    for (const key in serealizedForm) {
      if (serealizedForm.hasOwnProperty(key)) {
        formData.append(key, serealizedForm[key]);
      }
    }

  return formData;
}

const formsList = document.querySelectorAll(".js_form");
formsList.forEach((form) => {

  // Проверяем, есть ли уже атрибут data-event-attached
  if (!form.dataset.eventAttached) {


    const button = form.querySelector('button[type="submit"]')
    if (button) {

      button.addEventListener('click', () => {
        const submit = new Event('submit', {bubbles: true, cancelable: false});
        form.dispatchEvent(submit);
      })
    }

    form.addEventListener("submit", async (event) => {
      event.preventDefault();

      const inputsToValidate = [
        ...form.querySelectorAll('.form-control')
      ];

      inputsToValidate.forEach((input) => {
        validateInput(input);
      });

      if (form.querySelector('.is-invalid')) return;


      extractUTM(form);

      const serealizedForm = serealizeForm(form);
      const formData = getFormData(serealizedForm);

      let response = await fetch(form.dataset.action, {
        method: "POST",
        body: formData,
      });

      const submitButton = form.querySelector('button[type="submit"]');
      submitButton.classList.add('button--wait');

      try {
        // let result = await response.json();

        // if (result.status) {
        //   console.error(result.status);
        // }

        let buttonText;
        let buttonTextElement
        const submitButtonText = submitButton.querySelector('.button__text')

        if (submitButtonText) {
          buttonTextElement = submitButtonText;
        } else {
          buttonTextElement = submitButton;
        }
        buttonText = buttonTextElement.innerText;
        buttonTextElement.innerText = '✓ Ваша заявка принята';

        resetForm(form);

        setTimeout(() => {
          submitButton.classList.remove('button--wait');
          buttonTextElement.innerText = buttonText;
        }, 5000)
      } catch (error) {
        console.log(error)
      }

    });


    // Устанавливаем атрибут data-event-attached после привязки событий
    form.dataset.eventAttached = "true";
  }

});

function resetForm(form) {
  form.querySelectorAll('.input__field').forEach(input => {
    input.value = "";
  })
}

function extractUTM(form) {
  const urlParams = new URLSearchParams(window.location.search);

  // Запись значений UTM-меток в соответствующие поля формы
  const utmSource = form.querySelector('input[name="utm_source"]');
  if (utmSource) {
    utmSource.value = urlParams.get('utm_source') || '';
  }

  const utmMedium = form.querySelector('input[name="utm_medium"]');
  if (utmMedium) {
    utmMedium.value = urlParams.get('utm_medium') || '';
  }

  const utmCampaign = form.querySelector('input[name="utm_campaign"]');
  if (utmCampaign) {
    utmCampaign.value = urlParams.get('utm_campaign') || '';
  }

  const utmContent = form.querySelector('input[name="utm_content"]');
  if (utmContent) {
    utmContent.value = urlParams.get('utm_content') || '';
  }

  const utmTerm = form.querySelector('input[name="utm_term"]')
  if (utmTerm) {
    utmTerm.value = urlParams.get('utm_term') || '';
  }

  // Запись значения referer в соответствующее поле формы
  const referrer = form.querySelector('input[name="referrer"]')
  if (referrer) {
    referrer.value = document.referrer || '';
  }

  // Запись времени отправки формы в соответствующее поле
  const requestTime = form.querySelector('input[name="requestTime"]')
  if (requestTime) {
    requestTime.value = Date.now();
  }

  // Запись простой подписи (например, md5 хэш) для защиты от подделки данных на клиенте
  // document.querySelector('input[name="requestSimpleSign"]').value = 'Ваша простая подпись';
}

// #region input-labels
const inputs = document.querySelectorAll(".js_form .form-control");

const inputClasses = {
  invalid: "is-invalid",
  init: "input--init",
  active: "input--active",
  dropdown: "input--dropdown",
  activeDropdown: "input--active-dropdown",
  selectedDropdown: "input--selected-dropdown",
};

function activateInput(input) {
//   input.classList.add(inputClasses.active);
}
function deactivateInput(input) {
//   input.classList.remove(inputClasses.active);
}

function initInputs(inputs) {
  inputs.forEach((input) => {
    if (input.classList.contains(inputClasses.init)) return;
    input.classList.add(inputClasses.init);

    const field = input.querySelector("[required]");

    input.addEventListener("click", (e) => {
      if (!e.target.classList.contains("input__field")) return;
      if (input.classList.contains(inputClasses.activeDropdown)) {
        deactivateInput(input);
      } else {
        activateInput(input);
      }
    });

    if (!field) return;

    field.addEventListener("focus", () => {
      activateInput(input);
      // setInputValid(input);
    });
    field.addEventListener("blur", () => {
      deactivateInput(input);
      if (field.value != "") {
        validateInput(input);
      }
    });

    field.addEventListener('input', () => {
      setInputValid(input);
    });
    field.addEventListener('change', () => {
      setInputValid(input);
    })

    if (field.type != "email" && field.type != "tel") {
      field.addEventListener("input", (e) => {
        validateInput(input);
      });
    }

    if (field.value !== "") {
      input.classList.add(inputClasses.active);
    }
  });
}

initInputs(inputs);

// #endregion input-labels


/*

     window.addEventListener('load', function(){
        return;
        let loc = document.getElementById("855929640f27f2de67f");
        loc.value = window.location.href;
        let ref = document.getElementById("855929640f27f2de67fref");
        ref.value = document.referrer;

        let statUrl = "https://academychiptuning.by/stat/counter?ref=" + encodeURIComponent(document.referrer)
            + "&loc=" + encodeURIComponent(document.location.href);
        document.getElementById('gccounterImgContainer').innerHTML
            = "<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
    });

*/