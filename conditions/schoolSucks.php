<?php 
    if (isset($_GET["grade"])) {
        $grade = $_GET["grade"];

        if ($grade < 4) {
            echo "This work is really bad. What a dumb kid !";
    }
        if ($grade >= 5 AND $grade <= 9) {
            echo "This is not sufficient. More studying is required.";
    }
        if ($grade == 10) {
            echo "Barely enough !";
    }
        if ($grade >= 11 AND $grade <= 14) {
            echo "Not bad !";
    }
        if ($grade >= 15 AND $grade <= 18) {
            echo "Bravo, bravissimo !";
    }
        if ($grade == 19 OR $grade == 20) {
            echo "Too good to be true : confront the cheater !";
    }

    }
?>

<html><head><body>
    <form method="get" action="">
        <label for="grade">Enter grade: </label>
        <input type="text" name="grade">
        <input type="submit" name="submit" value="submit">
    </form>
</body></head></html>