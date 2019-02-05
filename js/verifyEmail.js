function validateEmail(email) { 
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
} 

function submitOnClick(form)
{
	success = true;
	
	for(i=0; i<form.elements.length; i++)
	{
		if(form.elements[i].value=="")
		{
			alert("Please enter a value for: "+ form.elements[i].name.toUpperCase());
			form.elements[i].focus();
			success = false;
			break;
		}
		
		if(form.elements[i].name==="email")
		{
			if(!validateEmail(form.elements[i].value))
			{
				alert("INVALID email address");
				form.elements[i].focus();
				success = false;
				break;
			}
		}
	}
	
	/*if(form.id ==="messageForm")
	{
		if(!success)
		{
			success = false;
			alert("Please select at least one room or one event.");
			document.getElementById("ROOMS_Deluxe").focus();
		}
	} */
	
	if(success) {
		document.getElementById('success').style.visibility = "visible";
		form.submit();
	}
}