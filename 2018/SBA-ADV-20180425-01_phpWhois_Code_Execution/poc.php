<?php
require_once(__DIR__ . '/vendor/autoload.php');

$whois = new phpWhois\Whois;
$whois->useServer('org', '127.0.0.1:9999');
echo $whois->lookup('example.org');
