function validation() {
  var name = document.getElementById("exampleInputName1");
  var emailid = document.getElementById("exampleInputEmail1");
  var section = document.getElementById("exampleInputSection1");
  var rollno = document.getElementById("exampleInputRollno1");
  var regno = document.getElementById("exampleInputRegno1");
  var math_2 = document.getElementById("math-2");
  var dsa = document.getElementById("dsa");
  var chemistry = document.getElementById("chemistry");
  var cetc = document.getElementById("cetc");
  var subtotal = document.getElementById("subtotal");
  var status = document.getElementById("exampleInputStatus1");
  var image = document.getElementById("fileToUpload");

  var emailValue = document.getElementById("exampleInputEmail1").value;

  var regex = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

  if (
    name.value.trim() != "" &&
    emailid.value.trim() != "" &&
    section.value.trim() != "" &&
    rollno.value.trim() != "" &&
    regno.value.trim() != "" &&
    math_2.value.trim() != "" &&
    dsa.value.trim() != "" &&
    chemistry.value.trim() != "" &&
    cetc.value.trim() != "" &&
    subtotal.value.trim() != "" &&
    status.value.trim() != "" &&
    image.value.trim() != ""
  ) {
    if (regex.test(emailValue)) {
      return true;
    } else {
      alert("Invalid Email address!!Please Try Again");
      return false;
    }
  } else {
    alert("No blank value allowed");
    return false;
  }
}
