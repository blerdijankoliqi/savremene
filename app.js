var username = document.getElementById("username")
var password = document.getElementById("password")
var loginButton = document.getElementById("login")


loginButton.addEventListener("click", function(){
    if(username.value == 'blerdijan' && password.value == 'blerdijan'){
        window.location.href = "home.php";
    } else{
        alert("Incorrect Username or Password. Try again.")
    }
})





