		const isEmail =(emailVal) => {
		var atSymbol = emailVal.indexOf("@");
		if(atSymbol < 1) return false;
		var dot = emailVal.lastIndexOf('.');
		if(dot<= atSymbol +2) return false;
		if(dot == emailVal.length -1) return false;
		return true;
		}
		
		function validate() {
			var email= document.getElementById("email");
			var emailVal= email.value.trim();
			if (!isEmail(emailVal)){
				alert("mmm");
				
			else {
			document.getElementById("recieveblood").submit();
			}
		}
	
	
	