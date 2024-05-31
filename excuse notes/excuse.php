<?php 

        if (isset($_GET["nameChild"]) AND isset( $_GET["gender"]) AND isset( $_GET["nameTeacher"]) AND isset($_GET["reason"]) AND isset($_GET["other"])) {
            $nameChild = $_GET["nameChild"];
            $gender = $_GET["gender"];
            $nameTeacher = $_GET["nameTeacher"];
            $reason = $_GET["reason"];
            $other = $_GET["other"];

        if ($reason == "illness") {
            echo "Please excuse my child, " . $nameChild . ", student of " . $nameTeacher . " , for being absent from school today due to " . $reason;

        } else if ($reason == "death of pet") {
            if ($gender == "boy") {
            echo "Please excuse my child, " . $nameChild . ", student of " . $nameTeacher . " , for being absent from school today. We experienced the loss of our family pet, which was very upsetting for him. We needed some time to grieve and support each other as a family.";
            } else {
                echo "Please excuse my child, " . $nameChild . ", student of " . $nameTeacher . " , for being absent from school today. We experienced the loss of our family pet, which was very upsetting for her. We needed some time to grieve and support each other as a family.";
            }
        } else if ($reason == "significant extra-curricular activity"){
            echo "Please excuse my child, " . $nameChild . ", student of " . $nameTeacher . " for being absent from school today due to participation in a " . $reason;

        } else if ($reason == "other"){
            $reason = $other;
            echo "My child " . $nameChild . ", student of " . $nameTeacher . " for being absent from school today due to " . $reason;
            
        }
    }
?>

<html>
    <head></head>
    <body>
        <form action="" method="get">
            <label for="nameChild">Name of your child: </label>
            <input type="text" name="nameChild">
            <!-- <input type="submit" name="submit" value="submit"> -->
            <br>
            <label for="gender">Gender of your child: </label>
            <input type="radio" name="gender" value="boy">
            <label for="gender">Boy</label>
            <input type="radio" name="gender" value="girl">
            <label for="gender">Girl</label>
            <!-- <input type="submit" name="submit" value="submit"> -->
            <br>
            <label for="nameTeacher">Name of teacher: </label>
            <input type="text" name="nameTeacher">
            <br>
            <label for="gender">Reason for absence: </label>
            <br>
            <input type="radio" name="reason" value="illness">
            <label for="gender">illness</label>
            <br>
            <input type="radio" name="reason" value="death of pet">
            <label for="gender">death of pet</label>
            <br>
            <input type="radio" name="reason" value="significant extra-curricular activity">
            <label for="gender">extra-curricular activity</label>
            <br>
            <input type="radio" name="reason" value="other">
            <label for="gender">any other excuse of your choice</label>
            <input type="text" name="other" value="">
            <br>
            <input type="submit" name="submit" value="submit">
            <br>

            
        </form>
    </body>
    </html>