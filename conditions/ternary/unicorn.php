<?php 
    if(isset($_GET["identity"])) {
        $identity = $_GET["identity"];
        $img = "";

        switch($identity) {
            case "human":
               $img = '<img src="/img/giphy.gif" alt="">';
               echo $img;
                break;
            case "cat":
                $img = '<img src="/img/cat.gif" alt="">';
                echo $img;
                break;
            case "unicorn":
                $img = '<img src="/img/unicorn.gif" alt="">';
                echo $img;
                break;

            default: 
            echo "Please select an identity.";
            break;
    }
}
?>
<html>
    <head></head>
    <body>
    <form method="get" action="unicorn.php">
        <label for="identity">Are you a human, a cat, or a unicorn ?</label>
        <input type="text" name="identity">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>