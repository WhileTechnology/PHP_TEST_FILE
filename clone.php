<?php


	class test
	{
		public $a;
		private $b;
			function __construct($a, $b)
			{
			$this->a = $a;
			$this->b = $b;
			}
	}
	$a = new test("ankur" , "techflirt");
	$b = clone $a; //Copy of the object
	$b->a = "No Ankur";
	print_r($a);
	echo "<br>";
	print_r($b);

?>
