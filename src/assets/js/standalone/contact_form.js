function ready(callbackFunc) {
  if (document.readyState !== "loading") {
    // Document is already ready, call the callback directly
    callbackFunc();
  } else if (document.addEventListener) {
    // All modern browsers to register DOMContentLoaded
    document.addEventListener("DOMContentLoaded", callbackFunc);
  } else {
    // Old IE browsers
    document.attachEvent("onreadystatechange", function () {
      if (document.readyState === "complete") {
        callbackFunc();
      }
    });
  }
}

ready(function () {
  console.log("Hejsan!");

  const mathForm = document.querySelector("#mathForm");
  const numberLeft = document.querySelector("#numberLeft");
  const numberRight = document.querySelector("#numberRight");
  const numberOperation = document.querySelector("#numberOperation");
  const mathResult = document.querySelector("#mathResult");
  const calculateButton = document.querySelector("#numbersCalculate");

  const options = {
    mathOperation: undefined,
  };

  function onOperationChanged(event) {
    if (event && event.target && event.target.value) {
      options.mathOperation = event.target.value;
    }
  }

  /**
   * Räkna ut talen med angiven operation.
   *
   * @param {number} left
   * @param {number} right
   */
  function calculate_numbers(left, right) {
    switch (options.mathOperation) {
      case "addera":
        return left + right;
      case "subtrahera":
        return left - right;
      case "multiplicera":
        return left * right;
      case "dividera":
        return left / right;
      default:
        return 0;
    }
  }

  function mathFormSubmit(ev) {
    const result = calculate_numbers(parseInt(numberLeft.value), parseInt(numberRight.value));

    mathResult.textContent = result.toString();

    ev.preventDefault();
    return false;
  }

  mathForm.addEventListener("submit", mathFormSubmit);

  numberOperation.addEventListener("change", onOperationChanged);

  // calculateButton.addEventListener("click", () =>
  //   calculate_numbers(numberLeft.textContent, numberRight.textContent)
  // );
});
