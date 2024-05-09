let fnameErr = document.getElementById('error-fname');
let lnameErr = document.getElementById('error-lname');
let emailErr = document.getElementById('error-email');
let colorErr = document.getElementById('error-color');
let subjectErr = document.getElementById('error-subject');
let messageErr = document.getElementById('error-message');

function validateFName() {
    let fname = document.getElementById('floatingFName').value;
    if (fname.trim() == "") {
        fnameErr.innerHTML = 'First name is required';
        return false;
    }

    if (!fname.match(/^[A-Z][a-z]*$/)) {
        fnameErr.innerHTML = 'Write first name starting with a capital letter';
        return false;
    }

    fnameErr.innerHTML = ''; 
    return true;
}

function validateLName() {
    let lname = document.getElementById('floatingLName').value;
    if (lname.trim() == "") {
        lnameErr.innerHTML = 'Last name is required';
        return false;
    }

    if (!lname.match(/^[A-Z][a-z]*$/)) {
        lnameErr.innerHTML = 'Write last name starting with a capital letter';
        return false;
    }

    lnameErr.innerHTML = ''; 
    return true;
}

function validateEmail() {
    let email = document.getElementById('floatingEmail').value;
    if (email.trim() == "") {
        emailErr.innerHTML = 'Email is required';
        return false;
      }
    else if (!email.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/)) {
        emailErr.innerHTML = 'Enter a valid email address';
        return false;
    }

    emailErr.innerHTML = '';
    return true;
}


function validateSubject() {
    let subject = document.getElementById('floatingSubject').value;
    if (subject.trim() == "") {
        subjectErr.innerHTML = 'Subject is required';
        return false;
    }

    else if (subject.length < 5) {
        subjectErr.innerHTML = 'Write a longer subject';
        return false;
    }

    subjectErr.innerHTML = ''; 
    return true;
}

function validateSubject() {
    let color = document.getElementById('floatingcolor').value;
    if (color.trim() == "") {
        colorErr.innerHTML = 'Color is required';
        return false;
    }

    else if (color.length < 2) {
        colorErr.innerHTML = 'Write a color';
        return false;
    }

    colorErr.innerHTML = ''; 
    return true;
}

function validateMessage() {
    let message = document.getElementById('floatingTextarea2').value;
    if (message.trim() == "") {
       messageErr.innerHTML = 'Message is required';
        return false;
    }

    else if (message.length < 10) {
       messageErr.innerHTML = 'Write a longer message';
        return false;
    }

    messageErr.innerHTML = ''; 
    return true;
}

function validateForm() {
    let isLNameValid = validateLName();
    let isFNameValid = validateFName();
    let isColorValid = validateColor();
    let isEmailValid = validateEmail();
    let isSubjectValid = validateSubject();
    let isMessageValid = validateMessage();

    if (isLNameValid && isFNameValid && isEmailValid && isSubjectValid && isMessageValid && isColorValid) {
        alert("Formularul a fost trimis cu succes!");
        return true;
    }
}