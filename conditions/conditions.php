
<?php 
        /** series of exercises on PHP conditional structures. */

        // 1.1 clean your room Exercise

        //  create array of possible states
        $possible_states = [
            0 => "health hazard",
            1 => "filthy",
            2 => "dirty",
            3 => "clean",
            4 => "immaculate",
        ];

        //  when testing, change the index value to navigate to the possible array values 
        
    $roomIsFilthy = $possible_states[1];

        if ($roomIsFilthy == $possible_states[1]) {
            echo "Yuk, room is disgusting : let's clean up !";
        } else if ($roomIsFilthy == $possible_states[2]) {
            echo "Yuk, room is dirty : let's clean up !";
        } else {
            echo "<br> Nothing to do, room is neat.";
        }
        ?>
        <br>
   <!-- Different greetings according to time -->
<?php
    date_default_timezone_set("Europe/Brussels");
    $now = date("H:i");  // get current time

    if ($now >= "05h00" AND $now <= "09h00") {
        echo "Good morning !";
    } else if ($now >= "09h01" AND $now <= "12h00") {
        echo "Good day !";
    } else if ($now >= "12h01" AND $now <= "16h00") {
        echo "Good afternoon !";
    } else if ($now >= "16h01" AND $now <= "21h00") {
        echo "Good evening !";
    } else if ($now >= "21h01" AND $now <= "04h59") {
        echo "Good night !";
    }
    ?>
    <br>
     <!-- Different greetings according to age -->
<?php

    if (isset($_GET["age"])){
        $age = $_GET["age"];
    
        if ($age < 12) {
            echo "Hello kiddo !";
    } else if ($age >= 12 AND $age <= 18) {
        echo "Hello Teenager !";
} else if ($age >= 18 AND $age <= 115) {
    echo "Hello Adult";
} else if ($age > 115) {
    echo "Wow! Still alive ? Are you a robot like me ? Can I hug you ?";
} else {
    echo "The age is not a valid number. Try again.";
} 
    }
?>
<br>
 <!-- Different greetings according to gender -->
<?php
    if (isset($_GET["gender"])){
        $gender = $_GET["gender"];
    
    if ($gender == "Woman") {
        echo "Hey, you are a woman !";
    } else if ($gender == "Man") {
        echo "Hey, you are a man !";
    } else {
        echo "What is your gender ?";
    }
}
?>
<br>
 <!-- Different greetings according to age and gender -->

<?php 

if ($age < 12) {
    if ($gender == "Woman") {
        echo "Hello, Miss kiddo !";
    } else {
        echo "Hello, Mister kiddo !";
    }
}
    if ($age >= 12 AND $age <= 18) {

        if ($gender == "Woman") {
        echo "Hello, Miss Teen !";
    } else {
        echo "Hello, Mister Teen !";
    }
}
    if ($age >= 18 AND $age <= 115) {

        if ($gender == "Woman") {
        echo "Hello, Miss Adult !";
    } else {
        echo "Hello, Mister Adult !";
    }
}
    if ($age >= 12 AND $age <= 18) {

        if ($gender == "Woman") {
        echo "Hello, Miss Teen !";
    } else {
        echo "Hello, Mister Teen !";
    }
}
    
?>
<br>
 <!-- Different greetings according to age, gender and mothertongue -->

 <?php 
 if (isset($_GET["motherTongue"])){
    $motherTongue = $_GET["motherTongue"];
    
    if ($age < 12 AND $motherTongue == "Yes") {
        if ($gender == "Woman") {
            echo "Hello, girl !";
        } else {
        echo "Hello, boy !";
    } 
} else if ($motherTongue == "No") {
        if ($gender == "Woman") {
            echo "Aloha, girl !";
        } else {
        echo "Aloha, boy !";
    }
}
 }
 ?>
 
 
<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
<form method="get" action="">
    <label for="age">Enter your age: </label>
    <input type="text" name="age" value="name">
    <br>
    <input type="radio" name="gender" value="Man">
    <label for="gender">Man</label>
    <input type="radio" name="gender" value="Woman">
    <label for="gender">Woman</label>
    <br>
    <label for="motherTongue">Do you speak English ?</label>
    <input type="radio" name="motherTongue" value="Yes">
    <label for="motherTongue">Yes</label>
    <input type="radio" name="motherTongue" value="No">
    <label for="motherTongue">No</label>
    <br>
    <input type="submit" name="submit" value="Greet me now">
 </body>
</form>
</html>