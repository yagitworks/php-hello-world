<?php
echo "<h1>Hello OpenShift 2016-12-02<h1>";
echo "Greetings:New23";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
