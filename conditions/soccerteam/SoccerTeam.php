


<?php 
    if (isset($_GET["age"]) AND (isset ($_GET["gender"]))) {
        $gender = $_GET["gender"];
        $age = $_GET["age"];

    if ($gender == "Woman") {
        if ($age >= 21 AND $age <= 40) {
             echo "Welcome to the team !";
        } } else {
            echo "Sorry, you don't fit the criteria";
        }
}
    ?>
    
    <html>
        <head></head>
        <body>
 <form method="get" action="">
    <label for="age">Enter your age: </label>
    <input type="text" name="age">
    <br>
    <label for="gender">Enter your gender: </label>
    <input type="radio" name="gender" value="Woman">
    <label for="gender">Woman</label>
    <input type="radio" name="gender" value="Man">
    <label for="gender">Man</label>
    <br>
    <label for="name">Enter your name: </label>
    <input type="text" name="name">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
        </body>
</html>