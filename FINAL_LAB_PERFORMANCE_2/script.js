let resultElement = document.getElementById("result");
let resultPrevElement = document.getElementById("resultPrev");
let operatorElement = document.getElementById("operator");
function btn(key) {
  console.log(key);
  if (!isNaN(key)) {
    let res = resultElement.innerHTML;
    resultElement.innerHTML = res == 0 ? key : res + key;
  } else if (key == ".") {
    indexOperator = resultElement.innerHTML.indexOf("+");
    if (!resultElement.innerHTML.includes(".")) {
      resultElement.innerHTML += ".";
    } else {
      //Check if dot exists on second num
    }
  } else {
    if (key == "+" || key == "-" || key == "*" || key == "/" || key == "=") {
      switch (operatorElement.innerHTML) {
        case "+":
          getResult(
            Number(resultPrevElement.innerHTML),
            Number(resultElement.innerHTML),
            "add",
            key
          );
          break;
        case "-":
          getResult(
            Number(resultPrevElement.innerHTML),
            Number(resultElement.innerHTML),
            "sub",
            key
          );
          break;
        case "*":
          getResult(
            Number(resultPrevElement.innerHTML),
            Number(resultElement.innerHTML),
            "mul",
            key
          );
          break;
        case "/":
          getResult(
            Number(resultPrevElement.innerHTML),
            Number(resultElement.innerHTML),
            "div",
            key
          );
          break;
        case "":
          resultPrevElement.innerHTML = resultElement.innerHTML;
          operatorElement.innerHTML = key;
          resultElement.innerHTML = 0;
          break;
        case "=":
          resultPrevElement.innerHTML = resultElement.innerHTML;
          operatorElement.innerHTML = key;
          resultElement.innerHTML = "0";
          break;
      }
    } else {
      switch (key) {
        case "CE":
          resultPrevElement.innerHTML = "";
          operatorElement.innerHTML = "=";
          break;
        case "C":
          resultElement.innerHTML = "0";
          resultPrevElement.innerHTML = "";
          operatorElement.innerHTML = "";
          break;
        case "DEL":
          resultElement.innerHTML = resultElement.innerHTML.slice(0, -1);
          break;
        case "+/-":
          if (resultElement.innerHTML.charAt(0) == "-") {
            resultElement.innerHTML = resultElement.innerHTML.substr(1);
          } else {
            resultElement.innerHTML = "-" + resultElement.innerHTML;
          }
          break;
      }
    }
  }
}

function hideElementsForEqual(key) {
  if (key == "=") {
    resultElement.innerHTML = resultPrevElement.innerHTML;
    resultPrevElement.innerHTML = "";
    operatorElement.innerHTML = "=";
  }
}

function getResult(num1, num2, operator, key) {
  let xhttp = new XMLHttpRequest();

  xhttp.open("POST", "jsGotNoOperators.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("num1=" + num1 + "&&num2=" + num2 + "&&operator=" + operator);

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      //document.getElementById('h1').innerHTML = this.responseText;
      //console.log(this.responseText);
      //return this.responseText;
      resultPrevElement.innerHTML = this.responseText;
      resultElement.innerHTML = 0;
      operatorElement.innerHTML = key;
      hideElementsForEqual(key);
    }
  };
}
