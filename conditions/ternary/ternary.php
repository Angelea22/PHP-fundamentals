<?php 

    if (isset($_GET["gender"])) {
    $gender = $_GET["gender"];
$hello = ($gender == "Woman") ? "Hello, Ma'am !" : "Hello, Sir !";
echo $hello;
    }
?>

<html><head><body>
    <form method="get" action="">
        <label for="gender">Enter you gender: </label>
        <input type="text" name="gender">
        <input type="submit" name="submit" value="submit">
    </form>
</body></head></html>