<?php
 session_start();
 echo "<h3> Search term</h3>";
 echo $_SESSION['input'];
?>

<input type="button" value="Return to homepage" onclick="location.href='index.php'">
