<html>
<head></head>

<body>

  <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#!" class="breadcrumb">First</a>
          <a href="#!" class="breadcrumb">Second</a>
          <a href="#!" class="breadcrumb">Third</a>
        </div>
      </div>
    </nav>

<table>
	<tr><td>Title</td><td>Author</td><td>Description</td></tr>
	<?php 

		foreach ($books as $title => $book)
		{
			echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>