function switchVisibleSignUp() {
    document.getElementById('signup-form').style.display = 'Block';
    document.getElementById('login-form').style.display = 'none';
    document.getElementsByClassName('signup')[0].style.background="#FFF";
    document.getElementsByClassName('login')[0].style.background="none";
  }
  
  function switchVisibleLogin(){
  document.getElementById('login-form').style.display = 'Block';
  document.getElementById('signup-form').style.display = 'none';
  document.getElementsByClassName('login')[0].style.background="#FFF";
  document.getElementsByClassName('signup')[0].style.background="none";
  
  }
  
  
  function validateLogin(){
    var emailLog = document.getElementById("emailLog").value;
    var pwLog = document.getElementById("pwLog").value;
    if(emailLog=="" && pwLog!="")
    {  alert("Please fill in your email/username."); return false; }
    else if(emailLog!="" && pwLog=="")
    {  alert("Please fill in your password."); return false; }
    else if(emailLog=="" && pwLog=="")
    {  alert("Please fill in all the required fields."); return false; }
    else{
      document.getElementById("Usr").innerHTML = "Verifying...";
      return true;
    }
  }
  
  function validateSignUp(){
    var emailSI = document.getElementById("emailSI").value;
    var pwSI = document.getElementById("pwSI").value;
    var userSI = document.getElementById("userSI").value;
    if(emailSI=="" || pwSI=="" || userSI=="")
    {  alert("Please fill in all the required fields."); return false; }
    else if(validateEmail(emailSI)==false)
    {   alert("The email format is invalid."); return false;}
    else if(validateEmail(emailSI) && validateUsername(userSI)==false)
    {  alert("Username format is invalid. The valid username format is A-Z, a-z, 0-9 and '-' "); return false;}
    else if(validateEmail(emailSI) && validateUsername(userSI) && pwSI.length<8)
    {  alert("Password too short. The minimum of characters is 8."); return false;}
    else{
      return true;
    }
  
  }
  
  function validateEmail(email){
    var RE = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return RE.test(email);
  }
  
  function validateUsername(username){
    var RE = /^[a-z0-9_-]{3,16}$/;
    return RE.test(username);
  }
  