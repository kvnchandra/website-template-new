var login_button = document.getElementById('login-button');
var email_form = document.getElementById('inputEmail');
var password_form = document.getElementById('inputPassword');

// button action to open index.html and logging in
login_button.onclick = function () {
	if(email_form.value != "" && password_form.value != ""){
		login_button.href = "index.html"
		localStorage.setItem("isLoggedIn", 1);
	}
}


