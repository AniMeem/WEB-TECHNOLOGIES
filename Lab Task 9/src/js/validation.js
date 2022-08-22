function valName() {
  let a = document.forms["validation"]["Name"].value;
  let pattern = /^[a-zA-Z]+$/;

  if (a == "") {
    alert("Name Can Not Be Empty!");
    return false;
  } else if (pattern.test(a) == false) {
    alert("Name Is Not Valid!");
  }
}

function valEmail() {
  let b = document.forms["validation"]["email"].value;
  let pattern = /(\w+)@(\w+){3,}.com/;

  if (b == "") {
    alert("Email Can Not Be Empty");
    return false;
  } else if (pattern.test(b) == false) {
    alert("Email Is Not Valid!");
  }
}

function valGender() {
  let c = document.forms["validation"]["gender"].value;
  if (c == "") {
    alert("Gender Can Not Be Empty");
    return false;
  }
}
