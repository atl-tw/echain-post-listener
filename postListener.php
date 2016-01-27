<?php

use Mosquitto\Client;

/*when this php file is hit, it attempts to connect, puts message on queue, then disconnects*/

$client = new Mosquitto\Client('PostListenerClient');

/* when connection is complete, send the received $_POST */
$client->onConnect(function() use ($client) {
    $topic = 'office/uhfrfid/echain';
    $qos = 2;
    $retain = false;
    $client->publish($topic, 'publish from php', $qos, $retain);
});

$client->connect('atliot.com', 1883);

?>