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


let errorState = { errorCall: false };
let errorStateTwo = { errorCall: false };
let errorStatePostal = { errorCall: false };
let errorStateAddress = { errorCall: false };

// Checking empty field
function checkInputField(fieldID, inputIDs, errorState) {
  let hasError = false;

  // Check each input field
  inputIDs.forEach(inputID => {
    if (inputID.value === "") {
      hasError = true;
      console.log("fill input");
    }
  });

  // Set error state and display or clear error message accordingly
  if (hasError) {
    if (!errorState.errorCall) {
      error(fieldID, "必須項目です。ご記入をお願いします。");
      errorState.errorCall = true;
    }
  } else {
    clearError(fieldID);
    errorState.errorCall = false;
  }
}

// Event listener function
function KanjiNameHandleInputChange() {
  checkInputField(kanjiName, [nameFirstOne, nameLastOne], errorState);
}
function katakanaNameHandleInputChange() {
  checkInputField(katakanaName, [nameFirstTwo, nameLastTwo], errorStateTwo);
}

function postalNoInputChange() {
  checkInputField(postalNo, [addressOne, addressTwo], errorStatePostal);
}

function addressNoInputChange() {
  checkInputField(addressNo, [addressThree], errorStateAddress);
}

// Add event listeners
nameFirstOne.addEventListener('change', KanjiNameHandleInputChange);
nameLastOne.addEventListener('change', KanjiNameHandleInputChange);
nameFirstTwo.addEventListener('change', katakanaNameHandleInputChange);
nameLastTwo.addEventListener('change', katakanaNameHandleInputChange);
addressOne.addEventListener('change', postalNoInputChange);
addressTwo.addEventListener('change', postalNoInputChange);
addressThree.addEventListener('change', addressNoInputChange);

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
});

// Resting contact form when click resetbtn
const resetButton = document.getElementById("rest-btn");
resetButton.addEventListener("click", () => {
  location.reload(); // Reloads the current document
});


// **** Checkbox *****
function checkCheckboxes() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var isChecked = false;
  

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      isChecked = true;
      break;
    }
  }

  if (!isChecked) {
    if (!checkboxError) {
      error(checkboxFieldset, "必須項目です。選択をお願いします。");
      checkboxError = true;
    }
  } else {
    clearError(checkboxFieldset);
    checkboxError = false; // Reset error state if at least one checkbox is checked
  }
}

// Assuming you have defined checkboxFieldset and checkboxError elsewhere

// Event listener function
function handleCheckboxChange() {
  checkCheckboxes();
}

// Add event listener to each checkbox
var checkboxes = document.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', handleCheckboxChange);
});
