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
	<h3>Please fill up the following form to register yourself</h3>
</div>
<div class="centerForm">
	<div class="row">
		<form class="col s12" method="post">
			<div class="row">
				<div class="input-fiel col s4">
					<div class="titulo2">Registration Form</div>
					<label for="name">Name</label>
					<input type="text" name="name" id="name" value="<?php echo $_REQUEST["name"]; ?>">
					<font color="red"><?php echo $errors["name"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
					<font color="red"><?php echo $errors["username"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
					<font color="red"><?php echo $errors["password"]; ?></font>
				</div>
			</div>
				<input type="hidden" name="page" value="register">
				<input type="hidden" name="caller" value="self">
				<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Sign Up<i class="material-icons left">directions_walk</i></button>
		</form>
	</div>
</div>
<?php
	}
	else
	{
?>
	<div class="titulo">
		<h3>Registration Successful</h3>
	</div>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
