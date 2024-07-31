

function ValidateFormForLoginEvent() {
	var login = document.getElementById("login").value;
	var pwd = document.getElementById("pwd").value;
	
		if (login != '' && pwd != '') {
		
		return true;

	} else {
		alert("Login and password are required.....!");
		return false;
	}
}