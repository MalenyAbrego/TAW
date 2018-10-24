<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
<div class="titulo">
	<h3>Please fill up the following form to login to your account</h3>
</div>
<div class="centerForm">
	<div class="row">
		<form class="col s12" method="post">
			<div class="titulo2">Login Form</div><br>
			<div class="row">
				<div class="input-fiel col s4">
					<label for="username">Username</label><br>
					<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
					
					<font color="red"><?php echo $errors["username"]; ?></font>
				</div>
				
			</div>
			<div class="row">
				<div class="input-fiel col s4">
					<label for="password">Password</label><br>
					<input type="password" name="password" id="password">
					<font color="red"><?php echo $errors["password"]; ?></font>
				</div>
			</div>
				<input type="hidden" name="page" value="login">
				<input type="hidden" name="caller" value="self">
				<button class="waves-effect waves-light btn-small pink accent-2" type="submit" name="action">Sing In<i class="material-icons left">directions_walk</i></button>
		</form>
	</div>
</div>
<?php
	}
	else
	{
?>

		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
