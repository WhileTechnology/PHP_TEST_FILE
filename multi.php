<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
   (
   array("Volvo",22,18),
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
   );
   
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$abc = array(array("00","01","02"), array("10","11","12"), array("20","21","22"));
echo $abc[0][0]." ";
echo $abc[1][2]." ";
echo $abc[2][2]." ";

?>

</body>
</html>