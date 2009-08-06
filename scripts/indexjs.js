<!--

function getLoginFor(forUser){
	sendGetRequest('login.php?forUser='+forUser,'loginDiv','afterLoginPage(\''+forUser+"\')");
}

function afterLoginPage(forUser){
	var formCtrl = document.loginForm;
	formCtrl.userType.value=forUser;
	if(forUser=='Admin'){
		formCtrl.username.value='Admin';
		//formCtrl.username.disabled='true';
	}
}

function checkUser(){
	var formCtrl = document.loginForm;	
	if(formCtrl.username.value=='Admin' && formCtrl.password.value=='Sreenivas'){
		formCtrl.action='admin/adminPage.php';		
		formCtrl.submit();
	}
	sendPostRequest('loginCheck.php','errors',document.loginForm,'afterUserLoginCheck()');
}
function afterUserLoginCheck(){
	if(document.getElementById('errors').innerHTML=='HOSPITAL'){
		window.location='hospitalUser.php';
	}else
	if(document.getElementById('errors').innerHTML=='USER'){
		window.location='katchyUser.php';
	}
	
}

function listFiles(hospital){
	sendGetRequest('listFiles.php?hospitalName='+hospital,'fileList','');
}

function viewHospitalFilesList(){
	sendGetRequest('viewHospitalUserFiles.php','loginDiv','');	
}
//-->