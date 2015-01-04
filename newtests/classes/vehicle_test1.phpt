--TEST--
PHP Spec test generated from ./classes/vehicle_test1.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

include_once 'PassengerJet.inc';

// $v = new Vehicle;		// can't instantiate an abstract class
// $a = new Aircraft;		// can't instantiate an abstract class

$pj = new PassengerJet("Horizon", 1993, 33000, 235);
echo "\$pj's maximum speed: " . $pj->getMaxSpeed() . "\n";
echo "\$pj's maximum altitude: " . $pj->getMaxAltitude() . "\n";
--EXPECT--
$pj's maximum speed: 550
$pj's maximum altitude: 30000