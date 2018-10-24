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
	<h3>Please fill up the following form to delete book</h3>
</div>
	<div class="row>">
		<div class="centerForm">
			<form class="col s12" method="post">
					<div class="titulo2">Book Delete Form</div>
				<div class="row">
					<div class="input-fiel col s4">
					<label for="title"><div class="texto">Do you really want to delete book <?php echo $book[0]["title"]; ?>?</div></label>
					</div>
				</div>
				<div class="row">
					<div class="input-fiel col s4">
						<select class="browser-default" name="choice">
							<option value="yes">Yes</option>
							<option value="no" selected>No</option>
						</select>
					</div>
				</div>
					<br>
					<input type="hidden" name="page" value="book_delete">
					<input type="hidden" name="caller" value="self">
					<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
					<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Delete<i class="material-icons right">delete</i></button>
			</form>
		</div>
	</div>
<?php
		}
		else
		{
?>
		<h3>Book Deleted</h3>
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
