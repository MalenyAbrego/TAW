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
	<h3>Please fill up the following form to add new book</h3>
</div>
<div class="centerForm">
	<div class="row">
		<form class="col s12" method="post">
			<div class="titulo2"
				<h5>Book Add Form</h5>
			</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="title">Title</label>
					<input type="text" name="title" id="title" value="<?php echo $_REQUEST["title"]; ?>">
					<font color="red"><?php echo $errors["title"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="author">Author</label>
					<input type="text" name="author" id="author" value="<?php echo $_REQUEST["author"]; ?>">
					<font color="red"><?php echo $errors["author"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="description">Description</label>
					<input type="text" name="description" id="description" value="<?php echo $_REQUEST["description"]; ?>">
					<font color="red"><?php echo $errors["description"]; ?></font>
				</div>
			</div>
				<input type="hidden" name="page" value="book_add">
				<input type="hidden" name="caller" value="self">
				<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Save<i class="material-icons left">save</i></button>
		</form>
	</div>
</div>
<?php
		}
		else
		{
?>
<div class="titulo">
		<h3>Book Saved</h3>
</div>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<div class="titulo">
<h3>Invalid Login!!! Try Again.</h3>
</div>
<?php
	}
	include_once "footer.php";
?>
