function togglePass() {
	let button = document.querySelector('.toggle-pass');
	let input = document.querySelector('#input-pass');

	button.classList.toggle('notShowPass');
	if(input.type == 'password') {
		input.type = 'text';
	}
	else {
		input.type = 'password';
	}
}

function verifPass() {
	let pass = document.querySelector('#pass').value;
	let confirmPass = document.querySelector('#confirmPass').value;
	let alert = document.querySelector('.alert');

	if(pass == confirmPass) {
		alert.style.display = 'none';
	}
	else {
		alert.style.display = 'block';
	}

}
