	<?php 
		$pageTitle = "Home";
		require_once("header.php"); 
	?>
		<div id="order">
			<h2>Order Food</h2>
			<h3>Search</h3>
			<form method="post" action="search.php">
				<input name='searchname' type='text' />
				<input type="submit" name='submit' value="Find Matches" />
			</form>
		</div>
		<div id="deals"
			<h2>Tappcentives</h2>
			<h3><a href="#">Most Popular</a></h3>
			<h3><a href="#">Ending Soon</a></h3>
		</div>
	<?php require_once("footer.php"); ?>

