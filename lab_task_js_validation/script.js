function arrayOfNum(start, end) {
  arr = [];
  for (i = start; i <= end; ++i) {
    arr.push(i);
  }
  return arr;
}

function stringContainsOnly(str, ascii, chars = []) {
  for (i = 0; i < chars.length; ++i) {
    ascii.push(chars[i].charCodeAt(0));
  }

  for (i = 0; i < str.length; ++i) {
    if (!ascii.includes(str.toLowerCase().charCodeAt(i))) {
      return false;
    }
  }
  return true;
}

function submitName() {
  inp = document.getElementsByTagName("input")[0].value;
  console.log(inp);

  errors = [];

  firstLetter = inp.toLowerCase().charCodeAt(0);
  if (firstLetter < 97 || firstLetter > 122) {
    errors.push("Name does not start with a letter");
  }
  console.log(stringContainsOnly(inp, arrayOfNum(97, 122), [" ", ".", "-"]));
  if (!stringContainsOnly(inp, arrayOfNum(97, 122), [" ", ".", "-"])) {
    errors.push("Invalid Character");
  }

  if (errors.length > 0) {
    console.log("Has error");
    errorStr = "Errors: \n";

    errors.forEach((error) => (errorStr += error + "\n"));

    console.log(errorStr);

    errorElement = document.getElementsByTagName("p")[0].innerText = errorStr;
  } else {
    errorElement = document.getElementsByTagName("p")[0].innerText =
      "Submit Successfull";
  }
}
