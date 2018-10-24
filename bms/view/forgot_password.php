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
	<h3>Please fill up the following form to retrieve password of your account</h3>
</div>
<div class="centerForm">
<div class="row">
	<form class="col s12" method="post">
			<div class="titulo2">Forgot Password Form</div>
				<div class="row">
					<div class="input-fiel col s4">	
					<label for="username">Username</label>
					<input type="text" name="username" id="username" value="">
					<font color="red"><?php echo $errors["username"]; ?></font>
				</div>
			</div>

			<input type="hidden" name="page" value="forgot_password">
			<input type="hidden" name="caller" value="self">
			<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Retrieve Password<i class="material-icons left">check</i></button>
	</form>
</div>
</div>
<?php
	}
	else
	{
?>
	<div class="titulo">
		<h3>Please check your mail for new password</h3>
	</div>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
