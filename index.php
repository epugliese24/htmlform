<?php
include('layout.html')
?>
<form method="POST" action="results1.php">
    <label for="firstName">first name:</label>
    <input type="text" id="firstName" name="firstName"><br>
    <label for="lastName">last name:</label>
    <input type="text" id="lastName" name="lastName"><br>
    <label for="address">address:</label>
    <input type="text" id="address" name="address"><br>
    <input type="submit" class="submitButton">
</form>