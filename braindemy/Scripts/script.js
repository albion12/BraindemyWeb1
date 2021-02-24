function validateContact(boxID) {
    var ConEmail = document.getElementById("ConEmail").value;
    var ConName = document.getElementById("ConName").value;
    var validBox = Boolean(validateMessage(1));
    var nameRE = /^[A-Za-z]+$/;
    var nameCheck = Boolean(ConName.match(nameRE));
    if (ConEmail == "" || ConName == "" || validBox == "false"){
      alert("Please fill in all the required fields."); return false;
    }else if (nameCheck == false){
      alert("Name is invalid. Use only letters."); return false;
    }else if (nameCheck == true && validateEmail(ConEmail) == false){
      alert("The email format is invalid."); return false;
    }else if (validateEmail(ConEmail) && nameCheck == true && validBox == false){
      alert("Your message must have at least 8 characters."); return false;
    }else {
      return true;
    }
}

function validateApplication(){
  var appEmail = document.getElementById("AppEmail").value;
  var AppName = document.getElementById("AppName").value;
  if (appEmail == "" || AppName == ""){
    alert("Please fill in all the required fields."); return false;
  }else if(validateEmail(appEmail) == false){
    alert("The email format is invalid."); return false;
  }else{
    return true;
  }
}

function validateMessage(boxID) {
      var boxType = document.getElementById('contactBox').value;
      if (boxType.length < 10) {
        return false;
      }
      return true;
}

function validateEmail(email) {
    var RE = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return RE.test(email);
}

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 3000);
}

