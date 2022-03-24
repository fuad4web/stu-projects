// window.location.href = `https://www.w3schools.com`;

// declaring username and password input value
var userName = document.forms[`form`][`username`];
var passWord = document.forms[`form`][`password`];

// declaring password and username error
var userError = document.getElementById(`username_error`);
var passError = document.getElementById(`password_error`);

//changing of username to e-mail but nt that much
userName.addEventListener(`textInput`, verifyEmail);
passWord.addEventListener(`textInput`, verifyPass);

// to display error if the certain conditions are not meant
function loginSite() {
   if(userName.value.length < 4) {
      userName.style.border = `2px solid red`;
      userError.style.display = `block`;
      userName.focus();
      return false;
   }
   if(passWord.value.length < 7) {
      passWord.style.border = `2px solid red`;
      passError.style.display = `block`;
      // to remove the error that it showed above before displaying the second error
      userError.style.display = `none`;
      passWord.focus();
      return false;
   }
};

// to verify what is input
function verifyEmail() {
   if(userName.value.length >= 4) {
      userName.style.border = `2px solid silver`;
      userError.style.display = `none`;
      return true;
   }
}
function verifyPass() {
   if(passWord.value.length >= 8) {
      passWord.style.border = `2px solid silver`;
      passError.style.display = `none`;
      return true;
   }
}
