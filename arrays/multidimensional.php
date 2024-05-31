<?php 

$me = array(
    "age" => 23,
    "firstname" => "Angel",
    "favorite season" => "spring",
    "do I like soccer ?" => true,
);

// echo "<pre>";
// print_r($me);
// echo "</pre>";


// -- add fav movies array to $me
$me["favorite movies"] = array("Signs", "Save Private Ryan", "Breakfast Club", "Deadpool");


// -- add hobbies array to $me and create hobbies array for mother
 
$me["hobbies"] = array("video games", "writing", "e-guitar");

$me["mother"] = array(
    "age" => 44,
"favorite season" => "winter",
"do I like soccer ?" => false,
);

// echo "<pre>";
// print_r($me);
// echo "</pre>";

// -- count number of hobbies

$motherHCount = count($me["mother"]);
echo $motherHCount;
echo "<br>";
$myHCount = count($me);
echo $myHCount;
echo "<br>";
$totalH = 3 + 5;
echo $totalH;
echo "<br>";

// -- add taxidermy to hobbies key

$me["hobbies"][] = "taxidermy";

$soulmate = array(
    "age" => 25,
    "favorite season" => "autumn",
    "do I like soccer ?" => true,
    "favorite movies" => array("Legend", "Venom", "Save Private Ryan"),
    "hobbies" => array("video games", "read"),
);

// $possible_hobbies_via_intersection = array_intersect($me, $soulmate);
$possible_hobbies_via_merge = array_merge($me, $soulmate);

// echo "<pre>";
// print_r($me);
// echo "</pre>";

echo '<pre>';
// print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>

<?php 

$web_development = array(
    "frontend" => [],
    "backend" => [],
);

$web_development["frontend"][] = "xhtml";
$web_development["backend"][] = "Ruby on Rails";
$web_development["frontend"][] = "CSS";
$web_development["backend"][] = "Flash";
$web_development["frontend"][] = "Javascript";
$web_development["frontend"][0] = "html";


    function removeElement($array, $section, $element) {
        foreach ($array[$section] as $key => $value) {
            if ($value == $element) {
                unset($array[$section][$key]);
            }
        }
        return $array;
    }
    $web_development = removeElement($web_development, "backend", "Flash");
// }


// echo implode(" ",$web_development);
echo "<pre>";
print_r($web_development);
echo "</pre>";

?>