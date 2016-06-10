
<?php
$text = "This is the Euro symbol '€'.";
echo "</br>";
echo 'Original : ', $text, PHP_EOL;
echo "</br>";
echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
echo "</br>";
echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), PHP_EOL;
echo "</br>";
echo 'Plain    : ', iconv("UTF-8", "ISO-8859-1", $text), PHP_EOL;
echo "</br>";

?>