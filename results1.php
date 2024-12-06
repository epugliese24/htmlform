<?php
include('layout.html');
echo("hello, " . $_POST['firstName']." ". $_POST['lastName'].". <br> you live at ".$_POST['address'].", right?")
?>
<form method="POST" action="results2.php">
 <input class="submitButton" type="submit" value="yes">
</form>
<form method="POST" action="results3.php">
 <input class="submitButton" type="submit" value="no">
</form>