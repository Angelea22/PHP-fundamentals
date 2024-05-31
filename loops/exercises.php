<!-- 1 -->
<?php 
$numbers = 1;

while ($numbers <= 120) {
    echo $numbers . "<br />";
    $numbers ++;
}
?>
<br>
<!-- 2 -->
<?php 

for ( $numbers2 = 1; $numbers2 <= 120; $numbers2 ++ ) {
    echo $numbers2 . "<br />";
}
?>
<br>
<!-- 3 -->
<?php
$startupFirstname = array("Youris", "Stacy", "Julie", "Justine", "Nathanael", "Dylan", "Jordan", "Caroline", "Isabelle", "Tasha", "Maryam", "Dzheylyan", "Zahra", "Lyne", "Arnaud", "Adrien B", "Adrien C", "Giovanni", "Iliess", "Tom", "Manu", "Ludovic", "Dorian");
 foreach ( $startupFirstname as $firstname ) {
    echo $firstname ."<br />";
 }
?>

