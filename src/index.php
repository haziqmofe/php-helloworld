<form method="post" action="check.php" >
Search: <input type="text" name="input">
<input type="hidden" name="check" value="1">
<input type="submit" value="Search">
</form>

<?php
session_start();

if (isset($_POST["check"])) {
  if (preg_match('/\<script\>.*\<\/script\>;/', $_POST['input'])) {
		header("Location: index.php");
		die();
	}

	else{
		$_SESSION['input'] = $_POST['input'];
		header("Location: display.php");
	}
}
?>
