function validateForm() {
    let first = document.forms["contact__me"]["first__name"].value;
    let last = document.forms["contact__me"]["last__name"].value;
    let email = document.forms["contact__me"]["email__address"].value;
    let subject = document.forms["contact__me"]["subject"].value;
    let message = document.forms["contact__me"]["message"].value;
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// 
// 
    if(mailformat.test(email) === false ){
        document.getElementById("error__email").style.display="flex";
        document.getElementById("email__address").style.border="2px #eb0000 solid";
        return false;
    }if(first ===""){
        document.getElementById("error__name").style.display="flex";
        document.getElementById("first__name").style.border="2px #eb0000 solid";
        return false;
    }if(last ===""){
        document.getElementById("error__last").style.display="flex";
        document.getElementById("last__name").style.border="2px #eb0000 solid";
        return false;
    }if(subject ===""){
        document.getElementById("error__subject").style.display="flex";
        document.getElementById("subject").style.border="2px #eb0000 solid";
        return false;
    }if(message ===""){
        document.getElementById("error__message").style.display="flex";
        document.getElementById("message").style.border="2px #eb0000 solid";
        return false;
    }
  }
//