<?php
function abc(){
	$ar = array(7 => 8,9 => 10);
	    
	return($ar);
}

//echo abc()[9];    // 10



?>

<?php
function foo() {
    return array(1, 2, 3);
}
//echo foo()[2]; // prints 3
?>

<?php
$func = function() { return array('a', 'b', 'c'); };
//echo $func()[2]; // prints a

	function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
}
 echo factorial(3);
 
 $str = "richest in the world";
 for($i=20;$i>=0;$i--){
 	echo $str[$i];
 }

?>


