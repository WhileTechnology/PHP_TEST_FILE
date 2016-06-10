<?php
//echo $rest = substr("abcdef", -1);    // returns "f"
//echo $rest = substr("abcdef", -2);    // returns "ef"
//echo $rest = substr("abcdefghi", 3, 3); // returns "def"

$str = "i love food";
$cc = strlen($str);

for($i=$cc-1;$i>-1;$i--){
	echo $str[$i];
}

echo "</br>";

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;

//echo str_replace(array('esp_rational_', 'fsm_rational_', 'esp_', 'fsm_'), '', strtolower($attributeCode));

?>