<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
<div class="titulo">
	<h3>Please fill up the following form to update your profile</h3>
</div>
<div class="centerForm">
	<div class="row">
		<form class="col s12" method="post">
				<div class="titulo2">Profile Update Form</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="name">Name</label>
					<input type="text" name="name" id="name" value="<?php echo $profile[0]["name"]; ?>">
					<font color="red"><?php echo $errors["name"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" value="<?php echo $profile[0]["username"]; ?>" readonly="true">
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
				[ Fill up only if you want to change it ]<br>
				<input type="hidden" name="page" value="profile">
				<input type="hidden" name="caller" value="self">
				<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Update<i class="material-icons left">edit</i></button>
		</form>
	</div>
</div>
<?php
		}
		else
		{
?>
		<h3>Profile Updated</h3>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
