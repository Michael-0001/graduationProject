<?php include('header.php'); 
echo "<h1>Saved in Session of user loged in</h1>";
echo"<pre>";
print_r($_SESSION);
echo"</pre>";

?>

<a href="logout.php">Log Out</a>

</body>
</html>
<?php include("footer.php") ?>