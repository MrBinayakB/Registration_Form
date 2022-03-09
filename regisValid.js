function clickFunc() {
    var username = document.getElementById("username").value;
    var usermail = document.getElementById("email").value;
    var userpass = document.getElementById("password").value;

    var pos = username.search(/^[A-Z][a-z]+\s[A-Z][a-z]+(\s[A-Z][a-z]+)?$/);
    var nameError = document.getElementById("userError");
    var pos2 = userpass.search(/^[\w]+(\@+[\w]+)?/);
    var passwError = document.getElementById("passError");
    var pos3 = usermail.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    var mailerror = document.getElementById("mailError");
    if (pos == -1) {
        nameError.innerHTML = "<span style='color:red'>*Invalid User</span>";
    } else {
        nameError.innerHTML = "<span style='color:green'>User is Valid</span>";
    }

    if (pos2 == -1) {
        passwError.innerHTML = "<span style='color:red'>*Invalid Password</span>";
    } else {
        passwError.innerHTML = "<span style='color:green'>Password is Valid</span>";
    }

    if (pos3 == -1) {
        mailerror.innerHTML = "<span style='color:red'>*Invalid Mail</span>";
    } else {
        mailerror.innerHTML = "<span style='color:green'>Mail is Valid</span>";
    }
}