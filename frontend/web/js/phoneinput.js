document.addEventListener("DOMContentLoaded", function () {
    var phoneInputs = document.querySelectorAll('input[type="tel"]');

    var getInputNumbersValue = function (input) {
        return input.value.replace(/\D/g, '');
    }

    var onPhonePaste = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        var pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            var pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    var onPhoneInput = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            if (e.data && /\D/g.test(e.data)) {
                input.value = inputNumbersValue;
            }
            return;
        }

        if ( ["0"].indexOf(inputNumbersValue[0]) > -1 || ["38"].indexOf(inputNumbersValue[0] + inputNumbersValue[1])  > -1 ) {
            if (inputNumbersValue[0] == "0") inputNumbersValue = "38" + inputNumbersValue;
            formattedInputValue = input.value = '+3' + inputNumbersValue.substring(1, 2);
            if (inputNumbersValue.length > 1) {
                formattedInputValue = input.value = '+3' + inputNumbersValue.substring(1, 3) + ' ';
            }
            if (inputNumbersValue.length >= 4) {
                formattedInputValue += '(' + inputNumbersValue.substring(3, 5);
            }
            if (inputNumbersValue.length >= 6) {
                formattedInputValue += ') ' + inputNumbersValue.substring(5, 8);
            }
            if (inputNumbersValue.length >= 9) {
                formattedInputValue += '-' + inputNumbersValue.substring(8, 10);
            }
            if (inputNumbersValue.length >= 11) {
                formattedInputValue += '-' + inputNumbersValue.substring(10, 12);
            }
        } else if(["8"].indexOf(inputNumbersValue[0]) > -1) {
            formattedInputValue =  inputNumbersValue.substring(0, 16);
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    var onPhoneKeyDown = function (e) {
        var inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 2) {
            e.target.value = "";
        }
    }
    for (var phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
})