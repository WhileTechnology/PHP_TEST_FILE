<?php
	
	function factorial($number) { 
		    if ($number < 2) { 
		        return 1; 
		    } else { 
		        return ($number * factorial($number-1)); 
		    } 
	}

	//echo factorial(5);




	function abc($x){
		if($x>0)
		echo $x."-".abc($x-1);
		else
		echo '0 -';
	}
	
	echo abc(10);
	
	
	
	
	


?>