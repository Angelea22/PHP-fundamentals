<?php 
if(isset($_GET["country"])) {
$country = $_GET["country"];
$countries = array(
    "BE" => "Belgium",
    "JPN" => "Japan",
    "NO" => "Norway",
    "SWE" => "Sweden", 
    "GER" => "Germany", 
    "ES" => "Spain", 
    "AU" => "Australia", 
    "CA" => "Canada", 
    "KR" => "South Korea", 
    "EL" => "Greece");

// foreach ( $countries as $country ) {
//     echo "select a country ." . $country ."<br />";
// }
}

?>

<html>
    <head></head>
    <body>
        <form method="get" action="">
            <label for="countries"></label>
            <select name="select" id="select">
                <option value="BE">Belgium</option>
                <option value="JPN">Japan</option>
                <option value="NO">Norway</option>
                <option value="SWE">Sweden</option>
                <option value="GER">Germany</option>
                <option value="ES">Spain</option>
                <option value="AU">Australia</option>
                <option value="CA">Canada</option>
                <option value="KR">South Korea</option>
                <option value="EL">Greece</option>
            </select>
        </form>
    </body>
</html>