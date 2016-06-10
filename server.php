<?php
error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Get the port for the WWW service. */
$service_port = getservbyname('www', 'tcp');
echo $service_port."</br>";

/* Get the IP address for the target host. */
$address = gethostbyname('www.google.com');
echo $address."</br>";

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "Socket Created! </br>";
}

echo "Attempting to connect to '$address' on port '$service_port'..."."</br>";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "Socket conencted AT $address on port $service_port."."</br>";
}

$in = "HEAD / HTTP/1.1\r\n";
$in .= "Host: www.example.com\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';

echo "Sending HTTP HEAD request..."."</br>";;
socket_write($socket, $in, strlen($in));
echo "Content written on the socket"."</br>";

echo "Reading response:\n\n"."</br>";;
while ($out = socket_read($socket, 2048)) {
    echo $out."</br>";
}
echo "</br>";
echo "Closing socket...";
socket_close($socket);
echo "Socket CLOSED"."</br>";



?>