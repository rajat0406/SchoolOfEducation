$(function(){

	$("#name_error_message").hide();
	$("#pass_error_message").hide();

	var error_name=false;
	var error_pass=false;

	$("#name").focusout(function(){
		check_name();
	});

	$("#passd").focusout(function(){
		check_pass();
	});


	function check_name(){
		var inputname = $("#name").val();
		var pattern = /^[A-Za-z0-9_-]{3,15}$/;	
		
		if(!inputname.match(pattern)){
			$("#name_error_message").html("Invalid name");
			$("#name_error_message").show();
			error_name = true;
		} else {
			$("#name_error_message").hide();
		}
	}

	function check_pass(){
		var inputpass=$("#passd").val();
		var pattern = /^[A-Za-z0-9]{8,12}$/;
		if(!inputpass.match(pattern)){
			$("#pass_error_message").html("length should 8-12");
			$("#pass_error_message").show();
			error_pass=true;
		}else{
			$("#pass_error_message").hide();
		}
	}

	$("#myForm").submit(function(){

		error_name=false;
		error_pass=false;

		check_name();
		check_pass();

		if(error_name==false&&error_pass==false)
			return true;
		else
			return false;
	});

});