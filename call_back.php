<?php

?>
<?php
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 10);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

//print implode(' ', $new_numbers);


function test($t){
	
	$t = ++$t;
	if($t<10){
		test($t);
	}else{
		return $t;
	}
}
var_dump(test(5)) ;


?>