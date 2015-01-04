--TEST--
PHP Spec test generated from ./types/string/numeric_like_strings.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

echo "============== var_dump(numeric_like_string) ===================\n\n";

var_dump("12345xxx");					// string(...)
var_dump("12345 xxx");					// string(...)
var_dump("12345.6xxx");					// string(...)
var_dump("12345.6 xxx");				// string(...)

echo "\n============== is_numeric(numeric_like_string) ===================\n\n";

var_dump(is_numeric("12345xxx"));		// false
var_dump(is_numeric("12345 xxx"));		// false
var_dump(is_numeric("12345.6xxx"));		// false
var_dump(is_numeric("12345.6 xxx"));	// false

echo "\n============== cast of numeric_like_string ===================\n\n";

var_dump((int)"12345xxx");				// int(12345); trailing non-numerics ignored
var_dump((int)"12345 xxx");				// int(12345); trailing non-numerics ignored
var_dump((float)"12345.6xxx");			// float(12345.6); trailing non-numerics ignored
var_dump((float)"12345.6 xxx");			// float(12345.6); trailing non-numerics ignored

echo "\n============== +/- numeric_like_string ===================\n\n";

var_dump(+"12345xxx");				// int(12345); trailing non-numerics ignored
var_dump(+"12345 xxx");				// int(12345)
var_dump(+"12345.6xxx");			// float(12345.6)
var_dump(+"12345.6 xxx");			// float(12345.6)
var_dump(-"12345xxx");				// int(-12345)
var_dump(-"12345 xxx");				// int(-12345)
var_dump(-"12345.6xxx");			// float(-12345.6)
var_dump(-"12345.6 xxx");			// float(-12345.6)

echo "\n============== relational/equality ops with numeric_like_string ===================\n\n";

var_dump(12345   == "12345xxx");		// int(12345); trailing non-numerics ignored
var_dump(12345   == "12345 xxx");		// int(12345)
var_dump(12345.6 == "12345.6xxx");		// float(12345.6)
var_dump(12345.6 == "12345.6 xxx");		// float(12345.6)

var_dump("12345" == "12345xxx");		// treated as a string
var_dump("12345" == "12345 xxx");		// treated as a string
var_dump("12345.6" == "12345.6xxx");	// treated as a string
var_dump("12345.6" == "12345.6 xxx");	// treated as a string

echo "\n============== ++/-- ops with numeric_like_string ===================\n\n";

$s1 = "12345xxx";
$s2 = "12345 xxx";
$s3 = "12345.6xxx";
$s4 = "12345.6 xxx";

var_dump(++$s1);
var_dump(++$s2);
var_dump(++$s3);
var_dump(++$s4);

$s1 = "12345xxx";
$s2 = "12345 xxx";
$s3 = "12345.6xxx";
$s4 = "12345.6 xxx";

var_dump(--$s1);
var_dump(--$s2);
var_dump(--$s3);
var_dump(--$s4);

$s1 = "12345xxx";
$s2 = "12345 xxx";
$s3 = "12345.6xxx";
$s4 = "12345.6 xxx";

var_dump($s1++);
var_dump($s2++);
var_dump($s3++);
var_dump($s4++);

$s1 = "12345xxx";
$s2 = "12345 xxx";
$s3 = "12345.6xxx";
$s4 = "12345.6 xxx";

var_dump($s1--);
var_dump($s2--);
var_dump($s3--);
var_dump($s4--);
--EXPECT--
============== var_dump(numeric_like_string) ===================

string(8) "12345xxx"
string(9) "12345 xxx"
string(10) "12345.6xxx"
string(11) "12345.6 xxx"

============== is_numeric(numeric_like_string) ===================

bool(false)
bool(false)
bool(false)
bool(false)

============== cast of numeric_like_string ===================

int(12345)
int(12345)
float(12345.6)
float(12345.6)

============== +/- numeric_like_string ===================

int(12345)
int(12345)
float(12345.6)
float(12345.6)
int(-12345)
int(-12345)
float(-12345.6)
float(-12345.6)

============== relational/equality ops with numeric_like_string ===================

bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(false)
bool(false)
bool(false)

============== ++/-- ops with numeric_like_string ===================

string(8) "12345xxy"
string(9) "12345 xxy"
string(10) "12345.6xxy"
string(11) "12345.6 xxy"
string(8) "12345xxx"
string(9) "12345 xxx"
string(10) "12345.6xxx"
string(11) "12345.6 xxx"
string(8) "12345xxx"
string(9) "12345 xxx"
string(10) "12345.6xxx"
string(11) "12345.6 xxx"
string(8) "12345xxx"
string(9) "12345 xxx"
string(10) "12345.6xxx"
string(11) "12345.6 xxx"
