<html>
    <head>
        <title>Variable Types</title>
    </head>
    <body>
<?php 
    $name = "angel";
    $age = 23;
    $eyeColor = "green";

    $family = array(
        0 => "Christophe",
        1 => "Aurore",
        2 => "Eden"
    );
?> 

<p> <?php echo "Hi! My name is " . $name; ?></p>
<p> <?php echo "I am " . $age; ?></p>
<p> <?php echo "My eyes are " . $eyeColor; ?></p>
<p> <?php echo "The first person in my family is " . $family[0]; ?></p>
<p> </p>




</body>
</html>
