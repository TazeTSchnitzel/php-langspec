--TEST--
PHP Spec test generated from ./expressions/primary_expressions/intrinsics_eval.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

$str = "Hello";

eval("echo \$str . \"\\n\";");
--EXPECT--
Hello