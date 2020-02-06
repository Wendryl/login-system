<?php
	$pageTitle = "Área administrativa";
 	require_once 'includes/header.php';
?>

	<form class="form" method="POST" action="system/login.php">
		<div class="icon"></div>
		<div class="input-wraper">
			<input type="text" name="login" class="input" autocomplete="off" placeholder=" ">
			<label for="login" class="input-label">
				Login
			</label>
		</div>
		<div class="input-wraper">
			<input type="password" name="pass" class="input" id="input-pass" autocomplete="off" placeholder=" ">
			<label for="pass" class="input-label" >
				Senha
			</label>
			<a class="toggle-pass showPass" toggle="#input-pass" onclick="togglePass()"></a>
		</div>
		<div class="input-wraper">
			<input type="submit" name="entrar" value="Login" class="button">
		</div>
		<a href="#forgot" class="forgot">Esqueceu sua senha?</a>
	</form>

	<p id="cadastre">
		Ainda não é cadastrado?<a href="cadastro.php"> Clique aqui.</a> 
	</p>
	

<?php require_once 'includes/footer.php'?>



