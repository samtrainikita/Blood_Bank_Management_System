
		const form = document.getElementById('form');
		const f_name = document.getElementById('f_name');
		const l_name = document.getElementById('l_name');
		const psw = document.getElementById('psw');
		const cpsw = document.getElementById('cpsw');
		const address = document.getElementById('address');
		const email= document.getElementById('email');
		const phone = document.getElementById('phone');
		const age = document.getElementById('age');
		
		
	
		

		const pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;	
		
		const isEmail =(emailVal) => {
		var atSymbol = emailVal.indexOf("@");
		if(atSymbol < 1) return false;
		var dot = emailVal.lastIndexOf('.');
		if(dot<= atSymbol +2) return false;
		if(dot == emailVal.length -1) return false;
		return true;
		}
		
		function validate () {
		const f_nameVal = f_name.value.trim();
		const l_nameVal = l_name.value.trim();
		const addressVal =address.value.trim();
		const emailVal= email.value.trim();
		const phoneVal= phone.value.trim();
		const ageVal= age.value.trim();
		const pswVal = psw.value.trim();
		const cpswVal = cpsw.value.trim();
		
		if(f_nameVal ===""){
		setErrorMsg(f_name,'name cannot be blank');
		}else if(f_nameVal.length <= 2){
		setErrorMsg(f_name,'name min 3 char');
		}else{
		setSuccessMsg(f_name);
		}
		
		if(l_nameVal ===""){
		setErrorMsg(l_name,'name cannot be blank');
		}else if(l_nameVal.length <= 2){
		setErrorMsg(l_name,'name min 3 char');
		}else{
		setSuccessMsg(l_name);
		}
		
		if(addressVal ===""){
		setErrorMsg(address,'address cannot be blank');
		}else{
		setSuccessMsg(address);
		}
		
		
		if(emailVal === ""){
		setErrorMsg(email,'email cannot be blank');
		}else if (!isEmail(emailVal)){
		setErrorMsg(email,'Not a valid email');
		}else {
		setSuccessMsg(email);
		}
		
		if(phoneVal === ""){
		setErrorMsg(phone,'phone cannot be blank');
		}else if (phoneVal.length != 10){
		setErrorMsg(phone,'Not a valid phone number');
		}else {
		setSuccessMsg(phone);
		}
		
		if(ageVal === ""){
		setErrorMsg(age,'age cannot be blank');
		}else if (ageVal <= 17 ){
		setErrorMsg(age,'age should be above 17 ');
		}else {
		setSuccessMsg(age);
		}
		
		
		if(pswVal === ""){
		setErrorMsg(psw,'password cannot be blank');
		}
		else if(pswVal.length != 8){
		setErrorMsg(psw,' password length should be 8');  }
		else if (!pwd_expression.test(pswVal)){
		setErrorMsg(psw,'Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}else {
		setSuccessMsg(psw);
		}
		
		if(cpswVal === ""){
		setErrorMsg(cpsw,'password cannot be blank');
		}
		else if(cpswVal.length != 8){
		setErrorMsg(cpsw,' password length should be 8');  
		}else if( cpswVal != pswVal){
		setErrorMsg(cpsw,' password not matching');  
		}
		else {
		setSuccessMsg(cpsw);
		}
		}
		
		function setErrorMsg(input , errormsgs){
		const formControl = input.parentElement;
		const small= formControl.querySelector('small');
		formControl.className= "form-control error";
		small.innerText = errormsgs;
		}
		
		function setSuccessMsg(input){
		const formControl = input.parentElement;
		formControl.className= "form-control success";
		}
		
		