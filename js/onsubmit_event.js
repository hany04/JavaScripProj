

function ValidationEvent() {
	var prenom = document.getElementById("prenom").value;
	var nom = document.getElementById("nom").value;
	var mail = document.getElementById("mail").value;
	var login = document.getElementById("login").value;
	var pwd = document.getElementById("pwd").value;
	var pwdConfirm = document.getElementById("pwdConfirm").value;
	
	var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	
	
	if (nom != '' && prenom != '' && mail != '' && login != '' && pwd != '' && pwdConfirm != '') {
		if (reg.test(mail)) {
			if (pwd == pwdConfirm) {
				alert("All type of validation has done on OnSubmit event.");
				return true;
			} else {
				alert("password and confirmation must be the same.....!");
				return false;
			}
		} else {
			alert("Invalid Email Address...!!!");
			return false;
		}
	} else {
		alert("All fields are required.....!");
		return false;
	}
}