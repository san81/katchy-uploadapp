<!--
function createUserForm(){
	sendGetRequest('createUserForm.php?usertype=USER','workingDiv','');
}
function createHospitalForm(){
	sendGetRequest('createUserForm.php?usertype=HOSPITAL','workingDiv','');
}
function associate(){
	sendGetRequest('associateUserForm.php?usertype=HOSPITAL','workingDiv','');
}
function getUserHospitals(userid){
	sendGetRequest('getUserHospitals.php?userid='+userid,'assHosp','');
}

function addLink(userid,hospitalid){
	sendGetRequest('addLink.php?userid='+userid+'&hospitalid='+hospitalid,'assHosp','getUserHospitals('+userid+')');
}
function removeLink(userid,hospitalid){
   sendGetRequest('removeLink.php?userid='+userid+'&hospitalid='+hospitalid,'assHosp','getUserHospitals('+userid+')');
}

function viewUsers(){
	sendGetRequest('viewAllUsers.php','workingDiv','');
}
function viewHospitals(){
	sendGetRequest('viewAllHospitals.php','workingDiv','');
}
function listFiles(hospital){
	sendGetRequest('../listFiles.php?hospitalName='+hospital,'fileList','');
}
function listAssignedHospitals(userid){
	sendGetRequest('../listAssignedHosp.php?user='+userid,'hospitalsList','');
}
function delUser(userid){
	sendGetRequest('delUser.php?userName='+userid,'workingDiv','viewUsers()');
}
function delHospital(hospitalid){
	sendGetRequest('delUser.php?userName='+hospitalid,'workingDiv','viewHospitals()');
}
function createUser(){	
	var formCtrl = document.createUserForm;
	if(formCtrl.username.value=='' || formCtrl.password.value=='')
	{
		 alert('Enter username and password for the user');
		 return;
	}else if(formCtrl.username.value.indexOf(' ')!=-1){
		alert('Username can not have spaces');
		return;
	}
	sendPostRequest('createUser.php','workingDiv',formCtrl,'');
		
}
//-->