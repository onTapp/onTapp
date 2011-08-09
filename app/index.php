<?php 
  $pageTitle = "Home";
  require_once("header.php"); 
?>
<div id="holder">
<div class = "main" id="order">
  <h2>Order Food</h2>
  <h3>Search</h3>
  <form method="post" action="search.php">
    <input name='searchname' type='text' />
    <input type="submit" name='submit' value="Find Matches" />
  </form>
</div>
<div class = "sidebar" id="deals">
  <h2>Tappcentives</h2>
  <h3><a href="#">Most Popular</a></h3>
  <h3><a href="#">Ending Soon</a></h3>
</div>
</div>
<?php require_once("footer.php"); ?>

