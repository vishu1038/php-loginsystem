$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault()

	var _form = $(this);
	var _error = $(".js-error",_form);
	var dataobj= {
		email : $("input[type='email']", _form).val(),
		password : $("input[type='password']",_form).val()
	}
	if(dataobj.email.length < 6){
		_error
			.text("Please enter a valid email address!")
			.show();
		return false;
	} else if(dataobj.password.length < 8) {
		_error
			.text("Please enter a passphrase of atleast 8 characters!")
			.show();
		return false;
	}

	_error.hide();

	$.ajax({
		type:'POST',
		url : '/../ajax/register.php',
		data : dataobj ,
		dataType: 'json',
		async :true,
	})
	.done(function ajaxDone(data){
		console.log(data);
		if(data.redirect != undefined) {
			window.location=data.redirect;
		}
	})
	.fail(function ajaxFailed(e){
		console.log(e);

	})
	.always(function ajaxAlwaysDoThis(data){
		console.log('Always');
	})

	return false;
})