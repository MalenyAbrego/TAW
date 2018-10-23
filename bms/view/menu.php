<?php
	if($before_login)
	{
?>
<nav>
	<div class="nav-wrapper grey darken-4">
		<div class="logo">
		<a href="#" class="brand-logo"> B M S</a></div>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="index.php?page=index">Home</a></li>
			<li><a href="index.php?page=register">Register</a></li>
			<li><a href="index.php?page=login">Login</a></li>
			<li><a href="index.php?page=forgot_password">Forgot Password</a></li>
		</ul>
	</div>
</nav>
<?php
	}
	else if($after_login)
	{
?>
<nav>
	<div class="nav-wrapper grey darken-4">
		<a href="#" class="brand-logo"> B M S</a>
	<ul id="nav-mobile" class="right hide-on-med-and-down">
		<li><a href="index.php?page=home">Home</a></li>
		<li><a href="index.php?page=profile">Profile</a></li>
		<li><a href="index.php?page=book_add">Add Book</a></li>
		<li><a href="index.php?page=book_list">List Book</a></li>
		<li><a href="index.php?page=logout">Logout</a></li>
	</ul>
</nav>
<?php
	}
?>
