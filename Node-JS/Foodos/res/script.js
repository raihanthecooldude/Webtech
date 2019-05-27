"use strict";

$(document).ready(function()
{
	$("#f1").validate({
		rules : {
			nm : {
				required : true,
				letterswithbasicpunc : true
			},
			username : {
				required : true,
				alphanumeric : true
			},
			email : {
				required : true,
				email : true
			},
			password : {
				required : true
			},
			rpassword : {
				required : true,
				equalTo : "#password"
			}
		}
		
		
	});
});







