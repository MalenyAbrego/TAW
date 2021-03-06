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
	<h3>Please fill up the following form to update book information</h3>
</div>
<div class="centerForm">
	<div class="row">
		<form class="col s12" method="post">
				<div class="titulo2">Book Update Form</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="title">Title</label>
					<input type="text" name="title" id="title" value="<?php echo $book[0]["title"]; ?>">
					<font color="red"><?php echo $errors["title"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="author">Author</label>
					<input type="text" name="author" id="author" value="<?php echo $book[0]["author"]; ?>">
					<font color="red"><?php echo $errors["author"]; ?></font>
				</div>
			</div>
			<div class="row">
				<div class="input-fiel col s4">	
					<label for="description">Description</label>
					<input type="text" name="description" id="description" value="<?php echo $book[0]["description"]; ?>">
					<font color="red"><?php echo $errors["description"]; ?></font>
				</div>
			</div>
				<input type="hidden" name="page" value="book_edit">
				<input type="hidden" name="caller" value="self">
				<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
				<button class="waves-effect waves-light btn-small pink lighten-1" type="submit" name="action">Update<i class="material-icons left">edit</i></button>
		</form>
	</div>
</div>
<?php
		}
		else
		{
?>
		<h3>Book Updated</h3>
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
