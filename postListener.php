<?php

use Mosquitto\Client;

error_log($_POST['test'].PHP_EOL, 3, "/var/log/php_errors.log");

$client = new Mosquitto\Client('PostListenerClient');

$client->connect('atliot.com', 1883);
$client->publish('office/uhfrfid/echain', 'publish from php');
$client->disconnect();

?>