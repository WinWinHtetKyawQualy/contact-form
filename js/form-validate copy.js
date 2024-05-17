// Selecting radio button variables
const lessorText = document.getElementById("lessor-text");
const lessorName = document.getElementById("lessor-name");
const address = document.getElementById("address");
const filedsetResident = document.getElementById("fieldset-resident");
const fieldsetOwner = document.getElementById("fieldset-owner");
const fieldsetSearch = document.getElementById("fieldset-search");
// Checking form validation variables
const radioFieldset = document.getElementById("fieldset-top");
const kanjiName = document.getElementById("kanji-name");
const nameFirstOne = document.getElementById("name01-1");
const nameLastOne = document.getElementById("name01-2");
const katakanaName = document.getElementById("katakana-name");
const nameFirstTwo = document.getElementById("name02-1");
const nameLastTwo = document.getElementById("name02-2");
const addressNo = document.getElementById("address-no");
const postalNo = document.getElementById("postal-number");
const addressOne = document.getElementById("address01");
const addressTwo = document.getElementById("address02");
const addressThree = document.getElementById("address03");
const checkBtn = document.getElementById("check-btn");

let radioError = false;
let errorCall = false;
let errorCallTwo = false;
let postalError = false;
let eddressError = false;
// Functions
function checkRadioButtons() {
  var radioButtons = document.querySelectorAll('input[name="choice01"]');
  var isChecked = false;

  for (var i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].checked) {
      isChecked = true;
      break;
    }
  }

  if (!isChecked) {
    if(!radioError){
      error(radioFieldset, "必須項目です。選択をお願いします。");
      radioError = true;
    }
  } else {
    clearError(radioFieldset);
  }
}
// Adding error tag
function error(idName, ngText) {
  const errorText = document.createElement("p");
  errorText.classList.add("error");
  errorText.textContent = ngText;
  idName.appendChild(errorText);
}
// Clear error messages
function clearError(idName) {
  const lastChild = idName.lastChild;
  if (lastChild.nodeType === Node.ELEMENT_NODE) {
    if (lastChild.classList.contains("error")) {
      idName.removeChild(lastChild);
    }
  }
}

// Selecting radio button
document.addEventListener("DOMContentLoaded", function () {
  var radioButtons = document.querySelectorAll('input[name="choice01"]');

  function checkSelectedRadioButton() {
    radioButtons.forEach(function (radioButton) {
      if (radioButton.checked) {
        if (radioButton.value == "choice01-1") {
          lessorText.classList.remove("hidden");
          lessorName.classList.remove("hidden");
          address.classList.remove("hidden");
        } else {
          lessorText.classList.add("hidden");
          lessorName.classList.add("hidden");
          address.classList.add("hidden");
        }

        if (radioButton.value == "choice01-1") {
          filedsetResident.classList.remove("hidden");
          fieldsetOwner.classList.add("hidden");
          fieldsetSearch.classList.add("hidden");
        } else if (radioButton.value == "choice01-2") {
          filedsetResident.classList.add("hidden");
          fieldsetOwner.classList.remove("hidden");
          fieldsetSearch.classList.add("hidden");
        } else if (radioButton.value == "choice01-3") {
          filedsetResident.classList.add("hidden");
          fieldsetOwner.classList.add("hidden");
          fieldsetSearch.classList.remove("hidden");
        } else {
          filedsetResident.classList.add("hidden");
          fieldsetOwner.classList.add("hidden");
          fieldsetSearch.classList.add("hidden");
        }
        clearError(radioFieldset);
      }
    });
  }

  radioButtons.forEach(function (radioButton) {
    radioButton.addEventListener("change", checkSelectedRadioButton);
  });

  // Initial check in case a radio button is already selected on page load
  checkSelectedRadioButton();
});

// Checking form validation when click submitbtn
checkBtn.addEventListener("click", (event) => {
  event.preventDefault();
  // Radio Button start
  checkRadioButtons();
  // Radio Button end

  // Name field start
  if (nameFirstOne.value == "" || nameLastOne.value == "") {
    if (!errorCall) {
      error(kanjiName, "必須項目です。ご記入をお願いします。");
      errorCall = true;
    }
  } else {
    // If there are no errors, clear any existing errors
    clearError(kanjiName);
    errorCall = false;
  }

  if (nameFirstTwo.value == "" || nameLastTwo.value == "") {
    if (!errorCallTwo) {
      error(katakanaName, "必須項目です。ご記入をお願いします。");
      errorCallTwo = true;
    }
  } else {
    // If there are no errors, clear any existing errors
    clearError(katakanaName);
    errorCallTwo = false;
  }
  // Name field end

  // Emailcheck start
  // Emailcheck end

  // Address check start
  if(addressOne.value == "" || addressTwo.value == "") {
    if(!postalError){
      error(postalNo, "必須項目です。ご記入をお願いします。");
      postalError = true;
    } else {
      clearError(postalNo);
      postalError = false;
    }
  }
  // Address check end

});

// Resting contact form when click resetbtn
const resetButton = document.getElementById("rest-btn");
resetButton.addEventListener("click", () => {
  location.reload(); // Reloads the current document
});