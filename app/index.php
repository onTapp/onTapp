<?php 
  $pageTitle = "Home";
  require_once("header.php"); 
?>
<script language="javascript" src="../public/javascripts/instasearch.js" type="text/javascript"></script>
<div id="holder">
<div class = "main" id="order">
  <h2>Order Food</h2>
  <h3>Search</h3>
  <form method="post" action="search.php" autocomplete="off">
    <input name='searchname' type='text' onKeyUp='showResult(this.value)' onFocus='showResult(this.value)' onBlur="showResult('delete')" />
    <div id="livesearch"></div>
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

