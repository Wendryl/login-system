<?php
	$pageTitle = "Recuperar senha";
 	require_once 'includes/header.php';
?>

	<form class="form" method="POST" action="system/pass-recovery.php">
		<h2>Recupere sua senha</h2>
		<div class="input-wraper">
			<input type="text" name="email" class="input" autocomplete="off" placeholder=" " required="yes">
			<label for="email" class="input-label">
				Informe-nos seu e-mail
			</label>
		</div>
		<div class="input-wraper">
			<input type="submit" name="recuperar" value="Recuperar senha" class="button">
		</div>
	</form>
	

<?php require_once 'includes/footer.php'?>
