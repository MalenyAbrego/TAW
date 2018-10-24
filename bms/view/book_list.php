<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
		<br><br>
		<div class="centerTable">
		<div class="row s9">
  		<div class="col s9">
		<table class="responsive-table" align="center">
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
<?php
		foreach($books as $book)
		{
?>
			<tr>
				<td><?php echo $book["title"]; ?></th>
				<td><?php echo $book["author"]; ?></th>
				<td><?php echo $book["description"]; ?></th>
				<td><a class="waves-effect waves-light btn pink lighten-1" href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>"><i class="material-icons left">mode_edit</i>Edit</a></th>
				<td><a class="waves-effect waves-light btn pink lighten-1" href="index.php?page=book_delete&id=<?php echo $book["id"]; ?>"><i class="material-icons left">delete</i>Delete</a></th>
			</tr>
<?php
		}
?>
		</table>
	</div>
</div>
</div>


<?php
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
