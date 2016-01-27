<?php

use Mosquitto\Client;

/*when this php file is hit, it attempts to connect, puts message on queue, then disconnects*/

$client = new Mosquitto\Client('PostListenerClient');

/* when connection is complete, send the received $_POST */
$client->onConnect(function() use ($client) {
    $client->publish('office/uhfrfid/echain', 'publish from php');
});

$client->connect('atliot.com', 1883);

?>