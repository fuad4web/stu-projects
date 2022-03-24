const form = document.getElementById(`form`);
const username = document.getElementById(`username`);
const email = document.getElementById(`email`);
const password = document.getElementById(`password`);
const confirmPassword = document.getElementById(`password2`);
var formOver = document.getElementById(`form-over`);
const text = document.querySelectorAll('.text-input');

document.addEventListener(`submit`, checkInputs);

function checkInputs(e) {
    e.preventDefault();
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const confirmValue = confirmPassword.value.trim();

    if(usernameValue === ``) {
        // show error
        // add error class
        setError(username, `username value input is empty`)
    } else {
        // addsuccess class
        setSuccess(username);
    }

    if(emailValue === ``) {
         // show error
        // add error class
        setError(email, `email value input is empty`)
    } else if(!verifyMail(emailValue)) {
        setError(email, `not a verified mail`)
    } else {
        // addsuccess class
        setSuccess(email);
    }

    if(passwordValue === ``) {
        // show error
        // add error class
        setError(password, `password value input is empty`)
    } else {
        // addsuccess class
        setSuccess(password);
    }

    if(confirmValue === ``) {
        // show error
       // add error class
       setError(confirmPassword, `password value input is empty`)
   } else if(passwordValue !== confirmValue) {
    setError(confirmPassword, `password didnt tally with the filled one above`)
   } else {
       // addsuccess class
       setSuccess(confirmPassword);
   }
};

function anotherTrial1() {
   // e.preventDefault();
        formOver.style.display = `none`;
}
function anotherTrial2() {
    // e.preventDefault();
         formOver.style.display = `block`;
 }

// success message function
function setSuccess(input) {
    const formControl = input.parentElement; // form-control
    // adding success class
   formControl.className = `form-control success`;
   return anotherTrial2();
    // document.classList.add(`form-over`);
}

// error message function
function setError(input, message) {
    const formControl = input.parentElement; // form-control
    const small = formControl.querySelector(`small`);

    // adding error message into the small tag
    small.innerText = message;

    // adding error class
    formControl.className = `form-control error`;
    return anotherTrial1();
}

function verifyMail(email) {
   return /^\w+([.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
}

/*
how to clarify mail which didnt work out
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
*/

const removeBtn = document.getElementById(`terminate`);
removeBtn.addEventListener(`click`, correctRefill);
function correctRefill(e) {
    e.preventDefault();
    formOver.style.display = `none`;
}

const goBack = document.getElementById(`last`);
goBack.addEventListener(`click`, pageReload);
function pageReload(e) {
    e.preventDefault();
    window.location.reload();
}
