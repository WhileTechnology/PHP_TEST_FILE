<?php
function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declare a new class instance and fill up 
// some values
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

//var_dump(get_students(null));
//var_dump(get_students($obj));

?>

<?php
error_reporting(0);
//error_reporting(E_ALL);


$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "not numeric",
    array(),
    9.1,
    pagal,
    '22TrueFALSE'
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo "'{$element}' is numeric", PHP_EOL;
    } else {
        echo "'{$element}' is NOT numeric", PHP_EOL;
    }
}
?>


<?php
$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
}
?>

<?php
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results now contains output from print_r
ECHO $results;
?>


<?php

function callback($buffer)
{
  // replace all the apples with oranges
  return (str_replace("raju", "rahul", $buffer));
}

ob_start("callback");

?>
<html>
<body>
<p>It's like comparing apples raju to oranges.</p>
</body>
</html>
<?php

ob_end_flush();

?>

