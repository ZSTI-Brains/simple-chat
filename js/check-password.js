var pass = document.querySelectorAll("input[type=password]");
var form = document.querySelector("form");

//form.addEventListener("submit", checkPass);

function checkPass() {
    if(pass[0].value == pass[1].value) {
        return true;
        console.log(true);
    }
    else {
        return false;   
        console.log(false);
    }
}