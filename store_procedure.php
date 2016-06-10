ample #1 Calling a stored procedure

<?php
$mysqli = new mysqli("localhost", "root", "", "ci_test");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
//    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
//}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query("CREATE PROCEDURE p(IN id_val INT, IN name VARCHAR(20) BEGIN INSERT INTO test(id,name) VALUES(id_val,name); END;")) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query("CALL p(55,'raju')")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

//if (!($res = $mysqli->query("SELECT id FROM test"))) {
//    echo "SELECT failed: (" . $mysqli->errno . ") " . $mysqli->error;
//}
//
//var_dump($res->fetch_assoc());
?>