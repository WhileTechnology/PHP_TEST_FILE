
<?php

	class abc {
		
	public static $var = 0;
	
		public static function xyz(){
		return  $sd = self::$var;
		}
		
	}
	
//	echo(abc::$var);
//	echo abc::xyz();
	$ob = new abc();
//	echo $ob->xyz();
	
	
	
?>
<?php
echo substr("22:00",0,2);
$email = "raj.gta92@gmail.com";

echo("<br>");

class A {
    function example() {
        echo "I am the original function A::example().<br />\n";
        A::other();
    }
    function other() {
        echo "I am the original function A::other().<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am the redefined function B::example().<br />\n";
        A::example();
    }
    function other() {
        echo "I am the redefined function B::other().<br />\n";
    }
}

//echo A::example();
//echo A::other();
//
//echo B::example();
//echo B::other();
$obj = new B();
echo $obj::example();
echo $obj::other();


alert(jQuery('#content #department-holder').html(jQuery('#product-holder #department-holder').html()));

jQuery('#content #department-holder').html()


?>
