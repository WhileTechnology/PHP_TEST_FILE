<?php 
//$x = 5;
//echo $x;
//echo "<br />";
//echo $x+++$x++;
//echo "<br />";
//echo $x;
//echo "<br />";
//echo $x---$x--;
//echo "<br />";
//echo $x;


//$a = '1';
//$b = $a;
//echo $b=2;
//echo $a;
//$b = "2$b";

//$x = true and false;
//var_dump($x);

//var_dump(0123 == 123);
//var_dump('0123' == 123);
//var_dump('0123' === 123);

//echo $x = 3 + "15%" + "$25";

//Created a branch for PLP-37 : Feed Export error for La Perla (403 error).
//Updated code and created branch for PLP-37: Feed Export 403 error for La Perla.
?>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);

$array1 = array('one','two');
$array2 = array(1,2);
$result = array_merge($array1,$array2);
print_r($result);


$array1 = array('one','two');
$array2 = array(1,2);
$result = array_combine($array1,$array2);
print_r($result);

$array = array('one','two');
echo json_encode($array);
unset($array);

$array = array('one','two');
echo serialize($array);




$num = 'hi this is a test';
$c = strlen($num);

$i = 0;
for($i=$c;$i>=0;$i--){
	$i = (int) $i;
	echo $num[$i];
}

$array = array("Web", "Technology", "Experts", "Notes");
if (in_array("Technology", $array)) {
    echo "<br>Record Found in value</br>";
}


//bool array_key_exists ( mixed $key , array $array );

$searchArray = array('Web' => 1, 'Technology' => 4);
if (array_key_exists('Web', $searchArray)) {
    echo "Record Found in key";
}

echo "</br>";
$mystring = 'abc';
$findme   = 'c';
$pos = strpos($mystring, $findme);
echo $pos;




echo "</br>";

$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);
echo $pos1;
echo $pos2;        

// Nope, 'a' is certainly not in 'xyz'
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'";
}
if ($pos2 === false) {
    echo "The string '$findme' was not found in the string '$mystring2'";
}



echo "</br>";

$mystring = "BallisbBall";
$pos = strripos($mystring, "b");
echo $pos;

echo "</br>";
$PATH = "http://localhost/test_program/test.php:";
// get last directory in $PATH
$dir = strrchr($PATH, "/");
echo $dir;


echo "</br>";
// get everything after last newline
$text = "I am happy";
$last = substr(strrchr($text, "a"), 1);
echo $last;
  

?>


<?php
/**
* @return bool
*/
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) session_start();



echo "</br>";

echo memory_get_usage() . "</br>"; // 36640

$a = str_repeat("Hello", 2555);

echo memory_get_usage() . "</br>"; // 57960

unset($a);

echo memory_get_usage() . "</br>"; // 36744




function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
}


echo factorial(3);

echo "</br>";



function abc($a){
	$c = strlen($a);
	if($c<2){
	return $c;
	}else{
		return $c * abc(($c-1));
	}
	
}

$a = "i am raju. The RIICHEST IN THE WORLD.";
echo abc($a);

echo nl2br("prime number\r");
$num = 2;
$count = 5;
for($i=1;$i<=$count;$i++){
	
	if($i%$num==0){ echo "$i is Prime No.</br>"; }
	else{ echo "$i is Not Prime</br>"; }
}



echo "</br></br></br>";

$num =10;

for( $j = 2; $j <= $num; $j++ )
{
	echo "J : $j </br>";
	for( $k = 2; $k < $j; $k++ )
	{
		echo "K : $k </br>";
		if( $j % $k == 0 )
		{
			break;
		}

	}
	if( $k == $j )
	echo "Prime Number $k : $j </br></br>";
}

echo "</br></br></br>";
echo 9%2;
echo 9%1;






?>


<?php
echo "</br>";
$num = 5;
$location = 'tree';
$format = 'The %2$s contains %1$04d monkeys';
echo sprintf($format, $num, $location);
?>

<?php
echo "</br>";
vprintf("%04d-%01d-%02d", explode('-', '1988-8-1')); // 1988-08-01  the second parameter must be an array;

?>

<?php
// getting the serial number
echo "</br>";
list($serial) = sscanf("SN/2350001", "SN/%d");
// and the date of manufacturing
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";

echo "</br>";
print "escaping characters is done \"Like this\".";

echo "</br>";
$bar['value'] = 2342;
print "this is {$bar['value']} !";

echo "</br>";
$foo = "asdf";
print "foo is {$foo}";



?>
<?php
echo "</br>";
// get author info and generate DocBook entry
$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
echo "<author id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>\n";
echo $id;
echo $first;
echo $last;
?>


<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.  Cocoa Framework, Objective-C, XCode 3.0 or 4.1 or 4.2. 
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
echo "</br>";
?>



<script>
var dayName = function() {
  var names = ["Sunday", "Monday", "Tuesday", "Wednesday",
               "Thursday", "Friday", "Saturday"];
  var raju = 7;
  
var func = function(){
	console.log(77);
	}  
  return function(number) {
	return names[number];
	//return raju;
  };
  return function(a,b) {
	return raju;
  };
  
  
}();


console.log(dayName(3));
//console.log(dayName());



</script>


<?php
echo "</br>";

$num = 3;
$val = 1;
$base = 3;

for($i=0;$i<$num;$i++){
	$val *= $base;
}
echo $val;


echo "</br>";
$arr = array(1 => 'raju', 13 => 'gupta');
$arr[] = 'ji';

var_dump($arr);

echo "</br>";
function abc12(){
	$arr = array(1 => 'raju', 13 => 'gupta');
	return $arr;
}
 print_r(abc12()[13]);
?>


<div class="row">
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
		<div name=""> 
			<input name="" id="hello" value="" /> <!-- small -->
		</div>
</div>
<button name="" class="" id="add"> addd </button>
<div class="row main-div">
</div> 
<script type="text/javascript">
		
</script>
