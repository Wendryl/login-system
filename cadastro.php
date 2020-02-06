<?php
	$pageTitle = "Cadastro";
 	require_once 'includes/header.php';
?>

	<form class="form" method="POST" action="system/create-account.php">
		<h2>Cadastre-se</h2>
		<div class="input-wraper">
			<input type="text" name="email" class="input" autocomplete="off" placeholder=" " required="yes">
			<label for="email" class="input-label">
				Email
			</label>
		</div>
		<div class="input-wraper">
			<input type="text" name="login" class="input" autocomplete="off" placeholder=" " required="yes">
			<label for="login" class="input-label">
				Login
			</label>
		</div>
		<div class="input-wraper">
			<input type="password" name="senha" class="input" id="pass" autocomplete="off" placeholder=" " required="yes" onkeyup="verifPass()">
			<label for="senha" class="input-label">
				Senha
			</label>
		</div>
		<div class="input-wraper">
			<input type="password" class="input" id="confirmPass" autocomplete="off" placeholder=" " required="yes" onkeyup="verifPass()">
			<label class="input-label">
				Confirme sua senha
			</label>
			<span class="alert">As senhas não são iguais!</span>
		</div>
		<div class="input-wraper">
			<input type="submit" name="cadastrar" value="Cadastrar" class="button">
		</div>
	</form>
	

<?php require_once 'includes/footer.php'?>
