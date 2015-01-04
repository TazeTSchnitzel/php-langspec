--TEST--
PHP Spec test generated from ./expressions/assignment_operators/assignment.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

$oper = array(0, -10, 100, -3.4e10, INF, -INF, NAN, TRUE, FALSE, NULL,
	"123", "2e+5", "", "abc", PHP_INT_MAX );
///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< *= >$e2<, result: "; var_dump($e1 *= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		if (($e2) == 0) continue;	// skip divide-by-zeros

		$e1 = $t;
		echo ">$e1< /= >$e2<, result: "; var_dump($e1 /= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		if (((int)$e2) == 0) continue;	// skip divide-by-zeros

		$e1 = $t;
		echo ">$e1< %= >$e2<, result: "; var_dump($e1 %= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< += >$e2<, result: "; var_dump($e1 += $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< -= >$e2<, result: "; var_dump($e1 -= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< .= >$e2<, result: "; var_dump($e1 .= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< <<= >$e2<, result: "; var_dump($e1 <<= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< >>= >$e2<, result: "; var_dump($e1 >>= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< &= >$e2<, result: "; var_dump($e1 &= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< ^= >$e2<, result: "; var_dump($e1 ^= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
foreach ($oper as $t)
{
	foreach ($oper as $e2)
	{
		$e1 = $t;
		echo ">$e1< |= >$e2<, result: "; var_dump($e1 |= $e2);
	}
	echo "-------------------------------------\n";
}
//*/

///*
var_dump($v = 10);
var_dump($v += 20);
var_dump($v -= 5);
var_dump($v .= 123.45);
$a = [100, 200, 300];
$i = 1;
var_dump($a[$i++] += 50);
var_dump($i);
//*/
--EXPECT--
>0< *= >0<, result: int(0)
>0< *= >-10<, result: int(0)
>0< *= >100<, result: int(0)
>0< *= >-34000000000<, result: float(-0)
>0< *= >INF<, result: float(NAN)
>0< *= >-INF<, result: float(NAN)
>0< *= >NAN<, result: float(NAN)
>0< *= >1<, result: int(0)
>0< *= ><, result: int(0)
>0< *= ><, result: int(0)
>0< *= >123<, result: int(0)
>0< *= >2e+5<, result: float(0)
>0< *= ><, result: int(0)
>0< *= >abc<, result: int(0)
>0< *= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< *= >0<, result: int(0)
>-10< *= >-10<, result: int(100)
>-10< *= >100<, result: int(-1000)
>-10< *= >-34000000000<, result: float(340000000000)
>-10< *= >INF<, result: float(-INF)
>-10< *= >-INF<, result: float(INF)
>-10< *= >NAN<, result: float(NAN)
>-10< *= >1<, result: int(-10)
>-10< *= ><, result: int(0)
>-10< *= ><, result: int(0)
>-10< *= >123<, result: int(-1230)
>-10< *= >2e+5<, result: float(-2000000)
>-10< *= ><, result: int(0)
>-10< *= >abc<, result: int(0)
>-10< *= >9223372036854775807<, result: float(-9.2233720368548E+19)
-------------------------------------
>100< *= >0<, result: int(0)
>100< *= >-10<, result: int(-1000)
>100< *= >100<, result: int(10000)
>100< *= >-34000000000<, result: float(-3400000000000)
>100< *= >INF<, result: float(INF)
>100< *= >-INF<, result: float(-INF)
>100< *= >NAN<, result: float(NAN)
>100< *= >1<, result: int(100)
>100< *= ><, result: int(0)
>100< *= ><, result: int(0)
>100< *= >123<, result: int(12300)
>100< *= >2e+5<, result: float(20000000)
>100< *= ><, result: int(0)
>100< *= >abc<, result: int(0)
>100< *= >9223372036854775807<, result: float(9.2233720368548E+20)
-------------------------------------
>-34000000000< *= >0<, result: float(-0)
>-34000000000< *= >-10<, result: float(340000000000)
>-34000000000< *= >100<, result: float(-3400000000000)
>-34000000000< *= >-34000000000<, result: float(1.156E+21)
>-34000000000< *= >INF<, result: float(-INF)
>-34000000000< *= >-INF<, result: float(INF)
>-34000000000< *= >NAN<, result: float(NAN)
>-34000000000< *= >1<, result: float(-34000000000)
>-34000000000< *= ><, result: float(-0)
>-34000000000< *= ><, result: float(-0)
>-34000000000< *= >123<, result: float(-4182000000000)
>-34000000000< *= >2e+5<, result: float(-6.8E+15)
>-34000000000< *= ><, result: float(-0)
>-34000000000< *= >abc<, result: float(-0)
>-34000000000< *= >9223372036854775807<, result: float(-3.1359464925306E+29)
-------------------------------------
>INF< *= >0<, result: float(NAN)
>INF< *= >-10<, result: float(-INF)
>INF< *= >100<, result: float(INF)
>INF< *= >-34000000000<, result: float(-INF)
>INF< *= >INF<, result: float(INF)
>INF< *= >-INF<, result: float(-INF)
>INF< *= >NAN<, result: float(NAN)
>INF< *= >1<, result: float(INF)
>INF< *= ><, result: float(NAN)
>INF< *= ><, result: float(NAN)
>INF< *= >123<, result: float(INF)
>INF< *= >2e+5<, result: float(INF)
>INF< *= ><, result: float(NAN)
>INF< *= >abc<, result: float(NAN)
>INF< *= >9223372036854775807<, result: float(INF)
-------------------------------------
>-INF< *= >0<, result: float(NAN)
>-INF< *= >-10<, result: float(INF)
>-INF< *= >100<, result: float(-INF)
>-INF< *= >-34000000000<, result: float(INF)
>-INF< *= >INF<, result: float(-INF)
>-INF< *= >-INF<, result: float(INF)
>-INF< *= >NAN<, result: float(NAN)
>-INF< *= >1<, result: float(-INF)
>-INF< *= ><, result: float(NAN)
>-INF< *= ><, result: float(NAN)
>-INF< *= >123<, result: float(-INF)
>-INF< *= >2e+5<, result: float(-INF)
>-INF< *= ><, result: float(NAN)
>-INF< *= >abc<, result: float(NAN)
>-INF< *= >9223372036854775807<, result: float(-INF)
-------------------------------------
>NAN< *= >0<, result: float(NAN)
>NAN< *= >-10<, result: float(NAN)
>NAN< *= >100<, result: float(NAN)
>NAN< *= >-34000000000<, result: float(NAN)
>NAN< *= >INF<, result: float(NAN)
>NAN< *= >-INF<, result: float(NAN)
>NAN< *= >NAN<, result: float(NAN)
>NAN< *= >1<, result: float(NAN)
>NAN< *= ><, result: float(NAN)
>NAN< *= ><, result: float(NAN)
>NAN< *= >123<, result: float(NAN)
>NAN< *= >2e+5<, result: float(NAN)
>NAN< *= ><, result: float(NAN)
>NAN< *= >abc<, result: float(NAN)
>NAN< *= >9223372036854775807<, result: float(NAN)
-------------------------------------
>1< *= >0<, result: int(0)
>1< *= >-10<, result: int(-10)
>1< *= >100<, result: int(100)
>1< *= >-34000000000<, result: float(-34000000000)
>1< *= >INF<, result: float(INF)
>1< *= >-INF<, result: float(-INF)
>1< *= >NAN<, result: float(NAN)
>1< *= >1<, result: int(1)
>1< *= ><, result: int(0)
>1< *= ><, result: int(0)
>1< *= >123<, result: int(123)
>1< *= >2e+5<, result: float(200000)
>1< *= ><, result: int(0)
>1< *= >abc<, result: int(0)
>1< *= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< *= >0<, result: int(0)
>< *= >-10<, result: int(0)
>< *= >100<, result: int(0)
>< *= >-34000000000<, result: float(-0)
>< *= >INF<, result: float(NAN)
>< *= >-INF<, result: float(NAN)
>< *= >NAN<, result: float(NAN)
>< *= >1<, result: int(0)
>< *= ><, result: int(0)
>< *= ><, result: int(0)
>< *= >123<, result: int(0)
>< *= >2e+5<, result: float(0)
>< *= ><, result: int(0)
>< *= >abc<, result: int(0)
>< *= >9223372036854775807<, result: int(0)
-------------------------------------
>< *= >0<, result: int(0)
>< *= >-10<, result: int(0)
>< *= >100<, result: int(0)
>< *= >-34000000000<, result: float(-0)
>< *= >INF<, result: float(NAN)
>< *= >-INF<, result: float(NAN)
>< *= >NAN<, result: float(NAN)
>< *= >1<, result: int(0)
>< *= ><, result: int(0)
>< *= ><, result: int(0)
>< *= >123<, result: int(0)
>< *= >2e+5<, result: float(0)
>< *= ><, result: int(0)
>< *= >abc<, result: int(0)
>< *= >9223372036854775807<, result: int(0)
-------------------------------------
>123< *= >0<, result: int(0)
>123< *= >-10<, result: int(-1230)
>123< *= >100<, result: int(12300)
>123< *= >-34000000000<, result: float(-4182000000000)
>123< *= >INF<, result: float(INF)
>123< *= >-INF<, result: float(-INF)
>123< *= >NAN<, result: float(NAN)
>123< *= >1<, result: int(123)
>123< *= ><, result: int(0)
>123< *= ><, result: int(0)
>123< *= >123<, result: int(15129)
>123< *= >2e+5<, result: float(24600000)
>123< *= ><, result: int(0)
>123< *= >abc<, result: int(0)
>123< *= >9223372036854775807<, result: float(1.1344747605331E+21)
-------------------------------------
>2e+5< *= >0<, result: float(0)
>2e+5< *= >-10<, result: float(-2000000)
>2e+5< *= >100<, result: float(20000000)
>2e+5< *= >-34000000000<, result: float(-6.8E+15)
>2e+5< *= >INF<, result: float(INF)
>2e+5< *= >-INF<, result: float(-INF)
>2e+5< *= >NAN<, result: float(NAN)
>2e+5< *= >1<, result: float(200000)
>2e+5< *= ><, result: float(0)
>2e+5< *= ><, result: float(0)
>2e+5< *= >123<, result: float(24600000)
>2e+5< *= >2e+5<, result: float(40000000000)
>2e+5< *= ><, result: float(0)
>2e+5< *= >abc<, result: float(0)
>2e+5< *= >9223372036854775807<, result: float(1.844674407371E+24)
-------------------------------------
>< *= >0<, result: int(0)
>< *= >-10<, result: int(0)
>< *= >100<, result: int(0)
>< *= >-34000000000<, result: float(-0)
>< *= >INF<, result: float(NAN)
>< *= >-INF<, result: float(NAN)
>< *= >NAN<, result: float(NAN)
>< *= >1<, result: int(0)
>< *= ><, result: int(0)
>< *= ><, result: int(0)
>< *= >123<, result: int(0)
>< *= >2e+5<, result: float(0)
>< *= ><, result: int(0)
>< *= >abc<, result: int(0)
>< *= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< *= >0<, result: int(0)
>abc< *= >-10<, result: int(0)
>abc< *= >100<, result: int(0)
>abc< *= >-34000000000<, result: float(-0)
>abc< *= >INF<, result: float(NAN)
>abc< *= >-INF<, result: float(NAN)
>abc< *= >NAN<, result: float(NAN)
>abc< *= >1<, result: int(0)
>abc< *= ><, result: int(0)
>abc< *= ><, result: int(0)
>abc< *= >123<, result: int(0)
>abc< *= >2e+5<, result: float(0)
>abc< *= ><, result: int(0)
>abc< *= >abc<, result: int(0)
>abc< *= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< *= >0<, result: int(0)
>9223372036854775807< *= >-10<, result: float(-9.2233720368548E+19)
>9223372036854775807< *= >100<, result: float(9.2233720368548E+20)
>9223372036854775807< *= >-34000000000<, result: float(-3.1359464925306E+29)
>9223372036854775807< *= >INF<, result: float(INF)
>9223372036854775807< *= >-INF<, result: float(-INF)
>9223372036854775807< *= >NAN<, result: float(NAN)
>9223372036854775807< *= >1<, result: int(9223372036854775807)
>9223372036854775807< *= ><, result: int(0)
>9223372036854775807< *= ><, result: int(0)
>9223372036854775807< *= >123<, result: float(1.1344747605331E+21)
>9223372036854775807< *= >2e+5<, result: float(1.844674407371E+24)
>9223372036854775807< *= ><, result: int(0)
>9223372036854775807< *= >abc<, result: int(0)
>9223372036854775807< *= >9223372036854775807<, result: float(8.5070591730235E+37)
-------------------------------------
>0< /= >-10<, result: int(0)
>0< /= >100<, result: int(0)
>0< /= >-34000000000<, result: float(-0)
>0< /= >INF<, result: float(0)
>0< /= >-INF<, result: float(-0)
>0< /= >NAN<, result: float(NAN)
>0< /= >1<, result: int(0)
>0< /= >123<, result: int(0)
>0< /= >2e+5<, result: float(0)
>0< /= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< /= >-10<, result: int(1)
>-10< /= >100<, result: float(-0.1)
>-10< /= >-34000000000<, result: float(2.9411764705882E-10)
>-10< /= >INF<, result: float(-0)
>-10< /= >-INF<, result: float(0)
>-10< /= >NAN<, result: float(NAN)
>-10< /= >1<, result: int(-10)
>-10< /= >123<, result: float(-0.08130081300813)
>-10< /= >2e+5<, result: float(-5.0E-5)
>-10< /= >9223372036854775807<, result: float(-1.0842021724855E-18)
-------------------------------------
>100< /= >-10<, result: int(-10)
>100< /= >100<, result: int(1)
>100< /= >-34000000000<, result: float(-2.9411764705882E-9)
>100< /= >INF<, result: float(0)
>100< /= >-INF<, result: float(-0)
>100< /= >NAN<, result: float(NAN)
>100< /= >1<, result: int(100)
>100< /= >123<, result: float(0.8130081300813)
>100< /= >2e+5<, result: float(0.0005)
>100< /= >9223372036854775807<, result: float(1.0842021724855E-17)
-------------------------------------
>-34000000000< /= >-10<, result: float(3400000000)
>-34000000000< /= >100<, result: float(-340000000)
>-34000000000< /= >-34000000000<, result: float(1)
>-34000000000< /= >INF<, result: float(-0)
>-34000000000< /= >-INF<, result: float(0)
>-34000000000< /= >NAN<, result: float(NAN)
>-34000000000< /= >1<, result: float(-34000000000)
>-34000000000< /= >123<, result: float(-276422764.22764)
>-34000000000< /= >2e+5<, result: float(-170000)
>-34000000000< /= >9223372036854775807<, result: float(-3.6862873864507E-9)
-------------------------------------
>INF< /= >-10<, result: float(-INF)
>INF< /= >100<, result: float(INF)
>INF< /= >-34000000000<, result: float(-INF)
>INF< /= >INF<, result: float(NAN)
>INF< /= >-INF<, result: float(NAN)
>INF< /= >NAN<, result: float(NAN)
>INF< /= >1<, result: float(INF)
>INF< /= >123<, result: float(INF)
>INF< /= >2e+5<, result: float(INF)
>INF< /= >9223372036854775807<, result: float(INF)
-------------------------------------
>-INF< /= >-10<, result: float(INF)
>-INF< /= >100<, result: float(-INF)
>-INF< /= >-34000000000<, result: float(INF)
>-INF< /= >INF<, result: float(NAN)
>-INF< /= >-INF<, result: float(NAN)
>-INF< /= >NAN<, result: float(NAN)
>-INF< /= >1<, result: float(-INF)
>-INF< /= >123<, result: float(-INF)
>-INF< /= >2e+5<, result: float(-INF)
>-INF< /= >9223372036854775807<, result: float(-INF)
-------------------------------------
>NAN< /= >-10<, result: float(NAN)
>NAN< /= >100<, result: float(NAN)
>NAN< /= >-34000000000<, result: float(NAN)
>NAN< /= >INF<, result: float(NAN)
>NAN< /= >-INF<, result: float(NAN)
>NAN< /= >NAN<, result: float(NAN)
>NAN< /= >1<, result: float(NAN)
>NAN< /= >123<, result: float(NAN)
>NAN< /= >2e+5<, result: float(NAN)
>NAN< /= >9223372036854775807<, result: float(NAN)
-------------------------------------
>1< /= >-10<, result: float(-0.1)
>1< /= >100<, result: float(0.01)
>1< /= >-34000000000<, result: float(-2.9411764705882E-11)
>1< /= >INF<, result: float(0)
>1< /= >-INF<, result: float(-0)
>1< /= >NAN<, result: float(NAN)
>1< /= >1<, result: int(1)
>1< /= >123<, result: float(0.008130081300813)
>1< /= >2e+5<, result: float(5.0E-6)
>1< /= >9223372036854775807<, result: float(1.0842021724855E-19)
-------------------------------------
>< /= >-10<, result: int(0)
>< /= >100<, result: int(0)
>< /= >-34000000000<, result: float(-0)
>< /= >INF<, result: float(0)
>< /= >-INF<, result: float(-0)
>< /= >NAN<, result: float(NAN)
>< /= >1<, result: int(0)
>< /= >123<, result: int(0)
>< /= >2e+5<, result: float(0)
>< /= >9223372036854775807<, result: int(0)
-------------------------------------
>< /= >-10<, result: int(0)
>< /= >100<, result: int(0)
>< /= >-34000000000<, result: float(-0)
>< /= >INF<, result: float(0)
>< /= >-INF<, result: float(-0)
>< /= >NAN<, result: float(NAN)
>< /= >1<, result: int(0)
>< /= >123<, result: int(0)
>< /= >2e+5<, result: float(0)
>< /= >9223372036854775807<, result: int(0)
-------------------------------------
>123< /= >-10<, result: float(-12.3)
>123< /= >100<, result: float(1.23)
>123< /= >-34000000000<, result: float(-3.6176470588235E-9)
>123< /= >INF<, result: float(0)
>123< /= >-INF<, result: float(-0)
>123< /= >NAN<, result: float(NAN)
>123< /= >1<, result: int(123)
>123< /= >123<, result: int(1)
>123< /= >2e+5<, result: float(0.000615)
>123< /= >9223372036854775807<, result: float(1.3335686721572E-17)
-------------------------------------
>2e+5< /= >-10<, result: float(-20000)
>2e+5< /= >100<, result: float(2000)
>2e+5< /= >-34000000000<, result: float(-5.8823529411765E-6)
>2e+5< /= >INF<, result: float(0)
>2e+5< /= >-INF<, result: float(-0)
>2e+5< /= >NAN<, result: float(NAN)
>2e+5< /= >1<, result: float(200000)
>2e+5< /= >123<, result: float(1626.0162601626)
>2e+5< /= >2e+5<, result: float(1)
>2e+5< /= >9223372036854775807<, result: float(2.168404344971E-14)
-------------------------------------
>< /= >-10<, result: int(0)
>< /= >100<, result: int(0)
>< /= >-34000000000<, result: float(-0)
>< /= >INF<, result: float(0)
>< /= >-INF<, result: float(-0)
>< /= >NAN<, result: float(NAN)
>< /= >1<, result: int(0)
>< /= >123<, result: int(0)
>< /= >2e+5<, result: float(0)
>< /= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< /= >-10<, result: int(0)
>abc< /= >100<, result: int(0)
>abc< /= >-34000000000<, result: float(-0)
>abc< /= >INF<, result: float(0)
>abc< /= >-INF<, result: float(-0)
>abc< /= >NAN<, result: float(NAN)
>abc< /= >1<, result: int(0)
>abc< /= >123<, result: int(0)
>abc< /= >2e+5<, result: float(0)
>abc< /= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< /= >-10<, result: float(-9.2233720368548E+17)
>9223372036854775807< /= >100<, result: float(9.2233720368548E+16)
>9223372036854775807< /= >-34000000000<, result: float(-271275648.14279)
>9223372036854775807< /= >INF<, result: float(0)
>9223372036854775807< /= >-INF<, result: float(-0)
>9223372036854775807< /= >NAN<, result: float(NAN)
>9223372036854775807< /= >1<, result: int(9223372036854775807)
>9223372036854775807< /= >123<, result: float(7.4986764527275E+16)
>9223372036854775807< /= >2e+5<, result: float(46116860184274)
>9223372036854775807< /= >9223372036854775807<, result: int(1)
-------------------------------------
>0< %= >-10<, result: int(0)
>0< %= >100<, result: int(0)
>0< %= >-34000000000<, result: int(0)
>0< %= >INF<, result: int(0)
>0< %= >-INF<, result: int(0)
>0< %= >NAN<, result: int(0)
>0< %= >1<, result: int(0)
>0< %= >123<, result: int(0)
>0< %= >2e+5<, result: int(0)
>0< %= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< %= >-10<, result: int(0)
>-10< %= >100<, result: int(-10)
>-10< %= >-34000000000<, result: int(-10)
>-10< %= >INF<, result: int(-10)
>-10< %= >-INF<, result: int(-10)
>-10< %= >NAN<, result: int(-10)
>-10< %= >1<, result: int(0)
>-10< %= >123<, result: int(-10)
>-10< %= >2e+5<, result: int(0)
>-10< %= >9223372036854775807<, result: int(-10)
-------------------------------------
>100< %= >-10<, result: int(0)
>100< %= >100<, result: int(0)
>100< %= >-34000000000<, result: int(100)
>100< %= >INF<, result: int(100)
>100< %= >-INF<, result: int(100)
>100< %= >NAN<, result: int(100)
>100< %= >1<, result: int(0)
>100< %= >123<, result: int(100)
>100< %= >2e+5<, result: int(0)
>100< %= >9223372036854775807<, result: int(100)
-------------------------------------
>-34000000000< %= >-10<, result: int(0)
>-34000000000< %= >100<, result: int(0)
>-34000000000< %= >-34000000000<, result: int(0)
>-34000000000< %= >INF<, result: int(-34000000000)
>-34000000000< %= >-INF<, result: int(-34000000000)
>-34000000000< %= >NAN<, result: int(-34000000000)
>-34000000000< %= >1<, result: int(0)
>-34000000000< %= >123<, result: int(-28)
>-34000000000< %= >2e+5<, result: int(0)
>-34000000000< %= >9223372036854775807<, result: int(-34000000000)
-------------------------------------
>INF< %= >-10<, result: int(-8)
>INF< %= >100<, result: int(-8)
>INF< %= >-34000000000<, result: int(-4854775808)
>INF< %= >INF<, result: int(0)
>INF< %= >-INF<, result: int(0)
>INF< %= >NAN<, result: int(0)
>INF< %= >1<, result: int(0)
>INF< %= >123<, result: int(-8)
>INF< %= >2e+5<, result: int(0)
>INF< %= >9223372036854775807<, result: int(-1)
-------------------------------------
>-INF< %= >-10<, result: int(-8)
>-INF< %= >100<, result: int(-8)
>-INF< %= >-34000000000<, result: int(-4854775808)
>-INF< %= >INF<, result: int(0)
>-INF< %= >-INF<, result: int(0)
>-INF< %= >NAN<, result: int(0)
>-INF< %= >1<, result: int(0)
>-INF< %= >123<, result: int(-8)
>-INF< %= >2e+5<, result: int(0)
>-INF< %= >9223372036854775807<, result: int(-1)
-------------------------------------
>NAN< %= >-10<, result: int(-8)
>NAN< %= >100<, result: int(-8)
>NAN< %= >-34000000000<, result: int(-4854775808)
>NAN< %= >INF<, result: int(0)
>NAN< %= >-INF<, result: int(0)
>NAN< %= >NAN<, result: int(0)
>NAN< %= >1<, result: int(0)
>NAN< %= >123<, result: int(-8)
>NAN< %= >2e+5<, result: int(0)
>NAN< %= >9223372036854775807<, result: int(-1)
-------------------------------------
>1< %= >-10<, result: int(1)
>1< %= >100<, result: int(1)
>1< %= >-34000000000<, result: int(1)
>1< %= >INF<, result: int(1)
>1< %= >-INF<, result: int(1)
>1< %= >NAN<, result: int(1)
>1< %= >1<, result: int(0)
>1< %= >123<, result: int(1)
>1< %= >2e+5<, result: int(1)
>1< %= >9223372036854775807<, result: int(1)
-------------------------------------
>< %= >-10<, result: int(0)
>< %= >100<, result: int(0)
>< %= >-34000000000<, result: int(0)
>< %= >INF<, result: int(0)
>< %= >-INF<, result: int(0)
>< %= >NAN<, result: int(0)
>< %= >1<, result: int(0)
>< %= >123<, result: int(0)
>< %= >2e+5<, result: int(0)
>< %= >9223372036854775807<, result: int(0)
-------------------------------------
>< %= >-10<, result: int(0)
>< %= >100<, result: int(0)
>< %= >-34000000000<, result: int(0)
>< %= >INF<, result: int(0)
>< %= >-INF<, result: int(0)
>< %= >NAN<, result: int(0)
>< %= >1<, result: int(0)
>< %= >123<, result: int(0)
>< %= >2e+5<, result: int(0)
>< %= >9223372036854775807<, result: int(0)
-------------------------------------
>123< %= >-10<, result: int(3)
>123< %= >100<, result: int(23)
>123< %= >-34000000000<, result: int(123)
>123< %= >INF<, result: int(123)
>123< %= >-INF<, result: int(123)
>123< %= >NAN<, result: int(123)
>123< %= >1<, result: int(0)
>123< %= >123<, result: int(0)
>123< %= >2e+5<, result: int(1)
>123< %= >9223372036854775807<, result: int(123)
-------------------------------------
>2e+5< %= >-10<, result: int(2)
>2e+5< %= >100<, result: int(2)
>2e+5< %= >-34000000000<, result: int(2)
>2e+5< %= >INF<, result: int(2)
>2e+5< %= >-INF<, result: int(2)
>2e+5< %= >NAN<, result: int(2)
>2e+5< %= >1<, result: int(0)
>2e+5< %= >123<, result: int(2)
>2e+5< %= >2e+5<, result: int(0)
>2e+5< %= >9223372036854775807<, result: int(2)
-------------------------------------
>< %= >-10<, result: int(0)
>< %= >100<, result: int(0)
>< %= >-34000000000<, result: int(0)
>< %= >INF<, result: int(0)
>< %= >-INF<, result: int(0)
>< %= >NAN<, result: int(0)
>< %= >1<, result: int(0)
>< %= >123<, result: int(0)
>< %= >2e+5<, result: int(0)
>< %= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< %= >-10<, result: int(0)
>abc< %= >100<, result: int(0)
>abc< %= >-34000000000<, result: int(0)
>abc< %= >INF<, result: int(0)
>abc< %= >-INF<, result: int(0)
>abc< %= >NAN<, result: int(0)
>abc< %= >1<, result: int(0)
>abc< %= >123<, result: int(0)
>abc< %= >2e+5<, result: int(0)
>abc< %= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< %= >-10<, result: int(7)
>9223372036854775807< %= >100<, result: int(7)
>9223372036854775807< %= >-34000000000<, result: int(4854775807)
>9223372036854775807< %= >INF<, result: int(9223372036854775807)
>9223372036854775807< %= >-INF<, result: int(9223372036854775807)
>9223372036854775807< %= >NAN<, result: int(9223372036854775807)
>9223372036854775807< %= >1<, result: int(0)
>9223372036854775807< %= >123<, result: int(7)
>9223372036854775807< %= >2e+5<, result: int(1)
>9223372036854775807< %= >9223372036854775807<, result: int(0)
-------------------------------------
>0< += >0<, result: int(0)
>0< += >-10<, result: int(-10)
>0< += >100<, result: int(100)
>0< += >-34000000000<, result: float(-34000000000)
>0< += >INF<, result: float(INF)
>0< += >-INF<, result: float(-INF)
>0< += >NAN<, result: float(NAN)
>0< += >1<, result: int(1)
>0< += ><, result: int(0)
>0< += ><, result: int(0)
>0< += >123<, result: int(123)
>0< += >2e+5<, result: float(200000)
>0< += ><, result: int(0)
>0< += >abc<, result: int(0)
>0< += >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-10< += >0<, result: int(-10)
>-10< += >-10<, result: int(-20)
>-10< += >100<, result: int(90)
>-10< += >-34000000000<, result: float(-34000000010)
>-10< += >INF<, result: float(INF)
>-10< += >-INF<, result: float(-INF)
>-10< += >NAN<, result: float(NAN)
>-10< += >1<, result: int(-9)
>-10< += ><, result: int(-10)
>-10< += ><, result: int(-10)
>-10< += >123<, result: int(113)
>-10< += >2e+5<, result: float(199990)
>-10< += ><, result: int(-10)
>-10< += >abc<, result: int(-10)
>-10< += >9223372036854775807<, result: int(9223372036854775797)
-------------------------------------
>100< += >0<, result: int(100)
>100< += >-10<, result: int(90)
>100< += >100<, result: int(200)
>100< += >-34000000000<, result: float(-33999999900)
>100< += >INF<, result: float(INF)
>100< += >-INF<, result: float(-INF)
>100< += >NAN<, result: float(NAN)
>100< += >1<, result: int(101)
>100< += ><, result: int(100)
>100< += ><, result: int(100)
>100< += >123<, result: int(223)
>100< += >2e+5<, result: float(200100)
>100< += ><, result: int(100)
>100< += >abc<, result: int(100)
>100< += >9223372036854775807<, result: float(9.2233720368548E+18)
-------------------------------------
>-34000000000< += >0<, result: float(-34000000000)
>-34000000000< += >-10<, result: float(-34000000010)
>-34000000000< += >100<, result: float(-33999999900)
>-34000000000< += >-34000000000<, result: float(-68000000000)
>-34000000000< += >INF<, result: float(INF)
>-34000000000< += >-INF<, result: float(-INF)
>-34000000000< += >NAN<, result: float(NAN)
>-34000000000< += >1<, result: float(-33999999999)
>-34000000000< += ><, result: float(-34000000000)
>-34000000000< += ><, result: float(-34000000000)
>-34000000000< += >123<, result: float(-33999999877)
>-34000000000< += >2e+5<, result: float(-33999800000)
>-34000000000< += ><, result: float(-34000000000)
>-34000000000< += >abc<, result: float(-34000000000)
>-34000000000< += >9223372036854775807<, result: float(9.2233720028548E+18)
-------------------------------------
>INF< += >0<, result: float(INF)
>INF< += >-10<, result: float(INF)
>INF< += >100<, result: float(INF)
>INF< += >-34000000000<, result: float(INF)
>INF< += >INF<, result: float(INF)
>INF< += >-INF<, result: float(NAN)
>INF< += >NAN<, result: float(NAN)
>INF< += >1<, result: float(INF)
>INF< += ><, result: float(INF)
>INF< += ><, result: float(INF)
>INF< += >123<, result: float(INF)
>INF< += >2e+5<, result: float(INF)
>INF< += ><, result: float(INF)
>INF< += >abc<, result: float(INF)
>INF< += >9223372036854775807<, result: float(INF)
-------------------------------------
>-INF< += >0<, result: float(-INF)
>-INF< += >-10<, result: float(-INF)
>-INF< += >100<, result: float(-INF)
>-INF< += >-34000000000<, result: float(-INF)
>-INF< += >INF<, result: float(NAN)
>-INF< += >-INF<, result: float(-INF)
>-INF< += >NAN<, result: float(NAN)
>-INF< += >1<, result: float(-INF)
>-INF< += ><, result: float(-INF)
>-INF< += ><, result: float(-INF)
>-INF< += >123<, result: float(-INF)
>-INF< += >2e+5<, result: float(-INF)
>-INF< += ><, result: float(-INF)
>-INF< += >abc<, result: float(-INF)
>-INF< += >9223372036854775807<, result: float(-INF)
-------------------------------------
>NAN< += >0<, result: float(NAN)
>NAN< += >-10<, result: float(NAN)
>NAN< += >100<, result: float(NAN)
>NAN< += >-34000000000<, result: float(NAN)
>NAN< += >INF<, result: float(NAN)
>NAN< += >-INF<, result: float(NAN)
>NAN< += >NAN<, result: float(NAN)
>NAN< += >1<, result: float(NAN)
>NAN< += ><, result: float(NAN)
>NAN< += ><, result: float(NAN)
>NAN< += >123<, result: float(NAN)
>NAN< += >2e+5<, result: float(NAN)
>NAN< += ><, result: float(NAN)
>NAN< += >abc<, result: float(NAN)
>NAN< += >9223372036854775807<, result: float(NAN)
-------------------------------------
>1< += >0<, result: int(1)
>1< += >-10<, result: int(-9)
>1< += >100<, result: int(101)
>1< += >-34000000000<, result: float(-33999999999)
>1< += >INF<, result: float(INF)
>1< += >-INF<, result: float(-INF)
>1< += >NAN<, result: float(NAN)
>1< += >1<, result: int(2)
>1< += ><, result: int(1)
>1< += ><, result: int(1)
>1< += >123<, result: int(124)
>1< += >2e+5<, result: float(200001)
>1< += ><, result: int(1)
>1< += >abc<, result: int(1)
>1< += >9223372036854775807<, result: float(9.2233720368548E+18)
-------------------------------------
>< += >0<, result: int(0)
>< += >-10<, result: int(-10)
>< += >100<, result: int(100)
>< += >-34000000000<, result: float(-34000000000)
>< += >INF<, result: float(INF)
>< += >-INF<, result: float(-INF)
>< += >NAN<, result: float(NAN)
>< += >1<, result: int(1)
>< += ><, result: int(0)
>< += ><, result: int(0)
>< += >123<, result: int(123)
>< += >2e+5<, result: float(200000)
>< += ><, result: int(0)
>< += >abc<, result: int(0)
>< += >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< += >0<, result: int(0)
>< += >-10<, result: int(-10)
>< += >100<, result: int(100)
>< += >-34000000000<, result: float(-34000000000)
>< += >INF<, result: float(INF)
>< += >-INF<, result: float(-INF)
>< += >NAN<, result: float(NAN)
>< += >1<, result: int(1)
>< += ><, result: int(0)
>< += ><, result: int(0)
>< += >123<, result: int(123)
>< += >2e+5<, result: float(200000)
>< += ><, result: int(0)
>< += >abc<, result: int(0)
>< += >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>123< += >0<, result: int(123)
>123< += >-10<, result: int(113)
>123< += >100<, result: int(223)
>123< += >-34000000000<, result: float(-33999999877)
>123< += >INF<, result: float(INF)
>123< += >-INF<, result: float(-INF)
>123< += >NAN<, result: float(NAN)
>123< += >1<, result: int(124)
>123< += ><, result: int(123)
>123< += ><, result: int(123)
>123< += >123<, result: int(246)
>123< += >2e+5<, result: float(200123)
>123< += ><, result: int(123)
>123< += >abc<, result: int(123)
>123< += >9223372036854775807<, result: float(9.2233720368548E+18)
-------------------------------------
>2e+5< += >0<, result: float(200000)
>2e+5< += >-10<, result: float(199990)
>2e+5< += >100<, result: float(200100)
>2e+5< += >-34000000000<, result: float(-33999800000)
>2e+5< += >INF<, result: float(INF)
>2e+5< += >-INF<, result: float(-INF)
>2e+5< += >NAN<, result: float(NAN)
>2e+5< += >1<, result: float(200001)
>2e+5< += ><, result: float(200000)
>2e+5< += ><, result: float(200000)
>2e+5< += >123<, result: float(200123)
>2e+5< += >2e+5<, result: float(400000)
>2e+5< += ><, result: float(200000)
>2e+5< += >abc<, result: float(200000)
>2e+5< += >9223372036854775807<, result: float(9.223372036855E+18)
-------------------------------------
>< += >0<, result: int(0)
>< += >-10<, result: int(-10)
>< += >100<, result: int(100)
>< += >-34000000000<, result: float(-34000000000)
>< += >INF<, result: float(INF)
>< += >-INF<, result: float(-INF)
>< += >NAN<, result: float(NAN)
>< += >1<, result: int(1)
>< += ><, result: int(0)
>< += ><, result: int(0)
>< += >123<, result: int(123)
>< += >2e+5<, result: float(200000)
>< += ><, result: int(0)
>< += >abc<, result: int(0)
>< += >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>abc< += >0<, result: int(0)
>abc< += >-10<, result: int(-10)
>abc< += >100<, result: int(100)
>abc< += >-34000000000<, result: float(-34000000000)
>abc< += >INF<, result: float(INF)
>abc< += >-INF<, result: float(-INF)
>abc< += >NAN<, result: float(NAN)
>abc< += >1<, result: int(1)
>abc< += ><, result: int(0)
>abc< += ><, result: int(0)
>abc< += >123<, result: int(123)
>abc< += >2e+5<, result: float(200000)
>abc< += ><, result: int(0)
>abc< += >abc<, result: int(0)
>abc< += >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>9223372036854775807< += >0<, result: int(9223372036854775807)
>9223372036854775807< += >-10<, result: int(9223372036854775797)
>9223372036854775807< += >100<, result: float(9.2233720368548E+18)
>9223372036854775807< += >-34000000000<, result: float(9.2233720028548E+18)
>9223372036854775807< += >INF<, result: float(INF)
>9223372036854775807< += >-INF<, result: float(-INF)
>9223372036854775807< += >NAN<, result: float(NAN)
>9223372036854775807< += >1<, result: float(9.2233720368548E+18)
>9223372036854775807< += ><, result: int(9223372036854775807)
>9223372036854775807< += ><, result: int(9223372036854775807)
>9223372036854775807< += >123<, result: float(9.2233720368548E+18)
>9223372036854775807< += >2e+5<, result: float(9.223372036855E+18)
>9223372036854775807< += ><, result: int(9223372036854775807)
>9223372036854775807< += >abc<, result: int(9223372036854775807)
>9223372036854775807< += >9223372036854775807<, result: float(1.844674407371E+19)
-------------------------------------
>0< -= >0<, result: int(0)
>0< -= >-10<, result: int(10)
>0< -= >100<, result: int(-100)
>0< -= >-34000000000<, result: float(34000000000)
>0< -= >INF<, result: float(-INF)
>0< -= >-INF<, result: float(INF)
>0< -= >NAN<, result: float(NAN)
>0< -= >1<, result: int(-1)
>0< -= ><, result: int(0)
>0< -= ><, result: int(0)
>0< -= >123<, result: int(-123)
>0< -= >2e+5<, result: float(-200000)
>0< -= ><, result: int(0)
>0< -= >abc<, result: int(0)
>0< -= >9223372036854775807<, result: int(-9223372036854775807)
-------------------------------------
>-10< -= >0<, result: int(-10)
>-10< -= >-10<, result: int(0)
>-10< -= >100<, result: int(-110)
>-10< -= >-34000000000<, result: float(33999999990)
>-10< -= >INF<, result: float(-INF)
>-10< -= >-INF<, result: float(INF)
>-10< -= >NAN<, result: float(NAN)
>-10< -= >1<, result: int(-11)
>-10< -= ><, result: int(-10)
>-10< -= ><, result: int(-10)
>-10< -= >123<, result: int(-133)
>-10< -= >2e+5<, result: float(-200010)
>-10< -= ><, result: int(-10)
>-10< -= >abc<, result: int(-10)
>-10< -= >9223372036854775807<, result: float(-9.2233720368548E+18)
-------------------------------------
>100< -= >0<, result: int(100)
>100< -= >-10<, result: int(110)
>100< -= >100<, result: int(0)
>100< -= >-34000000000<, result: float(34000000100)
>100< -= >INF<, result: float(-INF)
>100< -= >-INF<, result: float(INF)
>100< -= >NAN<, result: float(NAN)
>100< -= >1<, result: int(99)
>100< -= ><, result: int(100)
>100< -= ><, result: int(100)
>100< -= >123<, result: int(-23)
>100< -= >2e+5<, result: float(-199900)
>100< -= ><, result: int(100)
>100< -= >abc<, result: int(100)
>100< -= >9223372036854775807<, result: int(-9223372036854775707)
-------------------------------------
>-34000000000< -= >0<, result: float(-34000000000)
>-34000000000< -= >-10<, result: float(-33999999990)
>-34000000000< -= >100<, result: float(-34000000100)
>-34000000000< -= >-34000000000<, result: float(0)
>-34000000000< -= >INF<, result: float(-INF)
>-34000000000< -= >-INF<, result: float(INF)
>-34000000000< -= >NAN<, result: float(NAN)
>-34000000000< -= >1<, result: float(-34000000001)
>-34000000000< -= ><, result: float(-34000000000)
>-34000000000< -= ><, result: float(-34000000000)
>-34000000000< -= >123<, result: float(-34000000123)
>-34000000000< -= >2e+5<, result: float(-34000200000)
>-34000000000< -= ><, result: float(-34000000000)
>-34000000000< -= >abc<, result: float(-34000000000)
>-34000000000< -= >9223372036854775807<, result: float(-9.2233720708548E+18)
-------------------------------------
>INF< -= >0<, result: float(INF)
>INF< -= >-10<, result: float(INF)
>INF< -= >100<, result: float(INF)
>INF< -= >-34000000000<, result: float(INF)
>INF< -= >INF<, result: float(NAN)
>INF< -= >-INF<, result: float(INF)
>INF< -= >NAN<, result: float(NAN)
>INF< -= >1<, result: float(INF)
>INF< -= ><, result: float(INF)
>INF< -= ><, result: float(INF)
>INF< -= >123<, result: float(INF)
>INF< -= >2e+5<, result: float(INF)
>INF< -= ><, result: float(INF)
>INF< -= >abc<, result: float(INF)
>INF< -= >9223372036854775807<, result: float(INF)
-------------------------------------
>-INF< -= >0<, result: float(-INF)
>-INF< -= >-10<, result: float(-INF)
>-INF< -= >100<, result: float(-INF)
>-INF< -= >-34000000000<, result: float(-INF)
>-INF< -= >INF<, result: float(-INF)
>-INF< -= >-INF<, result: float(NAN)
>-INF< -= >NAN<, result: float(NAN)
>-INF< -= >1<, result: float(-INF)
>-INF< -= ><, result: float(-INF)
>-INF< -= ><, result: float(-INF)
>-INF< -= >123<, result: float(-INF)
>-INF< -= >2e+5<, result: float(-INF)
>-INF< -= ><, result: float(-INF)
>-INF< -= >abc<, result: float(-INF)
>-INF< -= >9223372036854775807<, result: float(-INF)
-------------------------------------
>NAN< -= >0<, result: float(NAN)
>NAN< -= >-10<, result: float(NAN)
>NAN< -= >100<, result: float(NAN)
>NAN< -= >-34000000000<, result: float(NAN)
>NAN< -= >INF<, result: float(NAN)
>NAN< -= >-INF<, result: float(NAN)
>NAN< -= >NAN<, result: float(NAN)
>NAN< -= >1<, result: float(NAN)
>NAN< -= ><, result: float(NAN)
>NAN< -= ><, result: float(NAN)
>NAN< -= >123<, result: float(NAN)
>NAN< -= >2e+5<, result: float(NAN)
>NAN< -= ><, result: float(NAN)
>NAN< -= >abc<, result: float(NAN)
>NAN< -= >9223372036854775807<, result: float(NAN)
-------------------------------------
>1< -= >0<, result: int(1)
>1< -= >-10<, result: int(11)
>1< -= >100<, result: int(-99)
>1< -= >-34000000000<, result: float(34000000001)
>1< -= >INF<, result: float(-INF)
>1< -= >-INF<, result: float(INF)
>1< -= >NAN<, result: float(NAN)
>1< -= >1<, result: int(0)
>1< -= ><, result: int(1)
>1< -= ><, result: int(1)
>1< -= >123<, result: int(-122)
>1< -= >2e+5<, result: float(-199999)
>1< -= ><, result: int(1)
>1< -= >abc<, result: int(1)
>1< -= >9223372036854775807<, result: int(-9223372036854775806)
-------------------------------------
>< -= >0<, result: int(0)
>< -= >-10<, result: int(10)
>< -= >100<, result: int(-100)
>< -= >-34000000000<, result: float(34000000000)
>< -= >INF<, result: float(-INF)
>< -= >-INF<, result: float(INF)
>< -= >NAN<, result: float(NAN)
>< -= >1<, result: int(-1)
>< -= ><, result: int(0)
>< -= ><, result: int(0)
>< -= >123<, result: int(-123)
>< -= >2e+5<, result: float(-200000)
>< -= ><, result: int(0)
>< -= >abc<, result: int(0)
>< -= >9223372036854775807<, result: int(-9223372036854775807)
-------------------------------------
>< -= >0<, result: int(0)
>< -= >-10<, result: int(10)
>< -= >100<, result: int(-100)
>< -= >-34000000000<, result: float(34000000000)
>< -= >INF<, result: float(-INF)
>< -= >-INF<, result: float(INF)
>< -= >NAN<, result: float(NAN)
>< -= >1<, result: int(-1)
>< -= ><, result: int(0)
>< -= ><, result: int(0)
>< -= >123<, result: int(-123)
>< -= >2e+5<, result: float(-200000)
>< -= ><, result: int(0)
>< -= >abc<, result: int(0)
>< -= >9223372036854775807<, result: int(-9223372036854775807)
-------------------------------------
>123< -= >0<, result: int(123)
>123< -= >-10<, result: int(133)
>123< -= >100<, result: int(23)
>123< -= >-34000000000<, result: float(34000000123)
>123< -= >INF<, result: float(-INF)
>123< -= >-INF<, result: float(INF)
>123< -= >NAN<, result: float(NAN)
>123< -= >1<, result: int(122)
>123< -= ><, result: int(123)
>123< -= ><, result: int(123)
>123< -= >123<, result: int(0)
>123< -= >2e+5<, result: float(-199877)
>123< -= ><, result: int(123)
>123< -= >abc<, result: int(123)
>123< -= >9223372036854775807<, result: int(-9223372036854775684)
-------------------------------------
>2e+5< -= >0<, result: float(200000)
>2e+5< -= >-10<, result: float(200010)
>2e+5< -= >100<, result: float(199900)
>2e+5< -= >-34000000000<, result: float(34000200000)
>2e+5< -= >INF<, result: float(-INF)
>2e+5< -= >-INF<, result: float(INF)
>2e+5< -= >NAN<, result: float(NAN)
>2e+5< -= >1<, result: float(199999)
>2e+5< -= ><, result: float(200000)
>2e+5< -= ><, result: float(200000)
>2e+5< -= >123<, result: float(199877)
>2e+5< -= >2e+5<, result: float(0)
>2e+5< -= ><, result: float(200000)
>2e+5< -= >abc<, result: float(200000)
>2e+5< -= >9223372036854775807<, result: float(-9.2233720368546E+18)
-------------------------------------
>< -= >0<, result: int(0)
>< -= >-10<, result: int(10)
>< -= >100<, result: int(-100)
>< -= >-34000000000<, result: float(34000000000)
>< -= >INF<, result: float(-INF)
>< -= >-INF<, result: float(INF)
>< -= >NAN<, result: float(NAN)
>< -= >1<, result: int(-1)
>< -= ><, result: int(0)
>< -= ><, result: int(0)
>< -= >123<, result: int(-123)
>< -= >2e+5<, result: float(-200000)
>< -= ><, result: int(0)
>< -= >abc<, result: int(0)
>< -= >9223372036854775807<, result: int(-9223372036854775807)
-------------------------------------
>abc< -= >0<, result: int(0)
>abc< -= >-10<, result: int(10)
>abc< -= >100<, result: int(-100)
>abc< -= >-34000000000<, result: float(34000000000)
>abc< -= >INF<, result: float(-INF)
>abc< -= >-INF<, result: float(INF)
>abc< -= >NAN<, result: float(NAN)
>abc< -= >1<, result: int(-1)
>abc< -= ><, result: int(0)
>abc< -= ><, result: int(0)
>abc< -= >123<, result: int(-123)
>abc< -= >2e+5<, result: float(-200000)
>abc< -= ><, result: int(0)
>abc< -= >abc<, result: int(0)
>abc< -= >9223372036854775807<, result: int(-9223372036854775807)
-------------------------------------
>9223372036854775807< -= >0<, result: int(9223372036854775807)
>9223372036854775807< -= >-10<, result: float(9.2233720368548E+18)
>9223372036854775807< -= >100<, result: int(9223372036854775707)
>9223372036854775807< -= >-34000000000<, result: float(9.2233720708548E+18)
>9223372036854775807< -= >INF<, result: float(-INF)
>9223372036854775807< -= >-INF<, result: float(INF)
>9223372036854775807< -= >NAN<, result: float(NAN)
>9223372036854775807< -= >1<, result: int(9223372036854775806)
>9223372036854775807< -= ><, result: int(9223372036854775807)
>9223372036854775807< -= ><, result: int(9223372036854775807)
>9223372036854775807< -= >123<, result: int(9223372036854775684)
>9223372036854775807< -= >2e+5<, result: float(9.2233720368546E+18)
>9223372036854775807< -= ><, result: int(9223372036854775807)
>9223372036854775807< -= >abc<, result: int(9223372036854775807)
>9223372036854775807< -= >9223372036854775807<, result: int(0)
-------------------------------------
>0< .= >0<, result: string(2) "00"
>0< .= >-10<, result: string(4) "0-10"
>0< .= >100<, result: string(4) "0100"
>0< .= >-34000000000<, result: string(13) "0-34000000000"
>0< .= >INF<, result: string(4) "0INF"
>0< .= >-INF<, result: string(5) "0-INF"
>0< .= >NAN<, result: string(4) "0NAN"
>0< .= >1<, result: string(2) "01"
>0< .= ><, result: string(1) "0"
>0< .= ><, result: string(1) "0"
>0< .= >123<, result: string(4) "0123"
>0< .= >2e+5<, result: string(5) "02e+5"
>0< .= ><, result: string(1) "0"
>0< .= >abc<, result: string(4) "0abc"
>0< .= >9223372036854775807<, result: string(20) "09223372036854775807"
-------------------------------------
>-10< .= >0<, result: string(4) "-100"
>-10< .= >-10<, result: string(6) "-10-10"
>-10< .= >100<, result: string(6) "-10100"
>-10< .= >-34000000000<, result: string(15) "-10-34000000000"
>-10< .= >INF<, result: string(6) "-10INF"
>-10< .= >-INF<, result: string(7) "-10-INF"
>-10< .= >NAN<, result: string(6) "-10NAN"
>-10< .= >1<, result: string(4) "-101"
>-10< .= ><, result: string(3) "-10"
>-10< .= ><, result: string(3) "-10"
>-10< .= >123<, result: string(6) "-10123"
>-10< .= >2e+5<, result: string(7) "-102e+5"
>-10< .= ><, result: string(3) "-10"
>-10< .= >abc<, result: string(6) "-10abc"
>-10< .= >9223372036854775807<, result: string(22) "-109223372036854775807"
-------------------------------------
>100< .= >0<, result: string(4) "1000"
>100< .= >-10<, result: string(6) "100-10"
>100< .= >100<, result: string(6) "100100"
>100< .= >-34000000000<, result: string(15) "100-34000000000"
>100< .= >INF<, result: string(6) "100INF"
>100< .= >-INF<, result: string(7) "100-INF"
>100< .= >NAN<, result: string(6) "100NAN"
>100< .= >1<, result: string(4) "1001"
>100< .= ><, result: string(3) "100"
>100< .= ><, result: string(3) "100"
>100< .= >123<, result: string(6) "100123"
>100< .= >2e+5<, result: string(7) "1002e+5"
>100< .= ><, result: string(3) "100"
>100< .= >abc<, result: string(6) "100abc"
>100< .= >9223372036854775807<, result: string(22) "1009223372036854775807"
-------------------------------------
>-34000000000< .= >0<, result: string(13) "-340000000000"
>-34000000000< .= >-10<, result: string(15) "-34000000000-10"
>-34000000000< .= >100<, result: string(15) "-34000000000100"
>-34000000000< .= >-34000000000<, result: string(24) "-34000000000-34000000000"
>-34000000000< .= >INF<, result: string(15) "-34000000000INF"
>-34000000000< .= >-INF<, result: string(16) "-34000000000-INF"
>-34000000000< .= >NAN<, result: string(15) "-34000000000NAN"
>-34000000000< .= >1<, result: string(13) "-340000000001"
>-34000000000< .= ><, result: string(12) "-34000000000"
>-34000000000< .= ><, result: string(12) "-34000000000"
>-34000000000< .= >123<, result: string(15) "-34000000000123"
>-34000000000< .= >2e+5<, result: string(16) "-340000000002e+5"
>-34000000000< .= ><, result: string(12) "-34000000000"
>-34000000000< .= >abc<, result: string(15) "-34000000000abc"
>-34000000000< .= >9223372036854775807<, result: string(31) "-340000000009223372036854775807"
-------------------------------------
>INF< .= >0<, result: string(4) "INF0"
>INF< .= >-10<, result: string(6) "INF-10"
>INF< .= >100<, result: string(6) "INF100"
>INF< .= >-34000000000<, result: string(15) "INF-34000000000"
>INF< .= >INF<, result: string(6) "INFINF"
>INF< .= >-INF<, result: string(7) "INF-INF"
>INF< .= >NAN<, result: string(6) "INFNAN"
>INF< .= >1<, result: string(4) "INF1"
>INF< .= ><, result: string(3) "INF"
>INF< .= ><, result: string(3) "INF"
>INF< .= >123<, result: string(6) "INF123"
>INF< .= >2e+5<, result: string(7) "INF2e+5"
>INF< .= ><, result: string(3) "INF"
>INF< .= >abc<, result: string(6) "INFabc"
>INF< .= >9223372036854775807<, result: string(22) "INF9223372036854775807"
-------------------------------------
>-INF< .= >0<, result: string(5) "-INF0"
>-INF< .= >-10<, result: string(7) "-INF-10"
>-INF< .= >100<, result: string(7) "-INF100"
>-INF< .= >-34000000000<, result: string(16) "-INF-34000000000"
>-INF< .= >INF<, result: string(7) "-INFINF"
>-INF< .= >-INF<, result: string(8) "-INF-INF"
>-INF< .= >NAN<, result: string(7) "-INFNAN"
>-INF< .= >1<, result: string(5) "-INF1"
>-INF< .= ><, result: string(4) "-INF"
>-INF< .= ><, result: string(4) "-INF"
>-INF< .= >123<, result: string(7) "-INF123"
>-INF< .= >2e+5<, result: string(8) "-INF2e+5"
>-INF< .= ><, result: string(4) "-INF"
>-INF< .= >abc<, result: string(7) "-INFabc"
>-INF< .= >9223372036854775807<, result: string(23) "-INF9223372036854775807"
-------------------------------------
>NAN< .= >0<, result: string(4) "NAN0"
>NAN< .= >-10<, result: string(6) "NAN-10"
>NAN< .= >100<, result: string(6) "NAN100"
>NAN< .= >-34000000000<, result: string(15) "NAN-34000000000"
>NAN< .= >INF<, result: string(6) "NANINF"
>NAN< .= >-INF<, result: string(7) "NAN-INF"
>NAN< .= >NAN<, result: string(6) "NANNAN"
>NAN< .= >1<, result: string(4) "NAN1"
>NAN< .= ><, result: string(3) "NAN"
>NAN< .= ><, result: string(3) "NAN"
>NAN< .= >123<, result: string(6) "NAN123"
>NAN< .= >2e+5<, result: string(7) "NAN2e+5"
>NAN< .= ><, result: string(3) "NAN"
>NAN< .= >abc<, result: string(6) "NANabc"
>NAN< .= >9223372036854775807<, result: string(22) "NAN9223372036854775807"
-------------------------------------
>1< .= >0<, result: string(2) "10"
>1< .= >-10<, result: string(4) "1-10"
>1< .= >100<, result: string(4) "1100"
>1< .= >-34000000000<, result: string(13) "1-34000000000"
>1< .= >INF<, result: string(4) "1INF"
>1< .= >-INF<, result: string(5) "1-INF"
>1< .= >NAN<, result: string(4) "1NAN"
>1< .= >1<, result: string(2) "11"
>1< .= ><, result: string(1) "1"
>1< .= ><, result: string(1) "1"
>1< .= >123<, result: string(4) "1123"
>1< .= >2e+5<, result: string(5) "12e+5"
>1< .= ><, result: string(1) "1"
>1< .= >abc<, result: string(4) "1abc"
>1< .= >9223372036854775807<, result: string(20) "19223372036854775807"
-------------------------------------
>< .= >0<, result: string(1) "0"
>< .= >-10<, result: string(3) "-10"
>< .= >100<, result: string(3) "100"
>< .= >-34000000000<, result: string(12) "-34000000000"
>< .= >INF<, result: string(3) "INF"
>< .= >-INF<, result: string(4) "-INF"
>< .= >NAN<, result: string(3) "NAN"
>< .= >1<, result: string(1) "1"
>< .= ><, result: string(0) ""
>< .= ><, result: string(0) ""
>< .= >123<, result: string(3) "123"
>< .= >2e+5<, result: string(4) "2e+5"
>< .= ><, result: string(0) ""
>< .= >abc<, result: string(3) "abc"
>< .= >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>< .= >0<, result: string(1) "0"
>< .= >-10<, result: string(3) "-10"
>< .= >100<, result: string(3) "100"
>< .= >-34000000000<, result: string(12) "-34000000000"
>< .= >INF<, result: string(3) "INF"
>< .= >-INF<, result: string(4) "-INF"
>< .= >NAN<, result: string(3) "NAN"
>< .= >1<, result: string(1) "1"
>< .= ><, result: string(0) ""
>< .= ><, result: string(0) ""
>< .= >123<, result: string(3) "123"
>< .= >2e+5<, result: string(4) "2e+5"
>< .= ><, result: string(0) ""
>< .= >abc<, result: string(3) "abc"
>< .= >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>123< .= >0<, result: string(4) "1230"
>123< .= >-10<, result: string(6) "123-10"
>123< .= >100<, result: string(6) "123100"
>123< .= >-34000000000<, result: string(15) "123-34000000000"
>123< .= >INF<, result: string(6) "123INF"
>123< .= >-INF<, result: string(7) "123-INF"
>123< .= >NAN<, result: string(6) "123NAN"
>123< .= >1<, result: string(4) "1231"
>123< .= ><, result: string(3) "123"
>123< .= ><, result: string(3) "123"
>123< .= >123<, result: string(6) "123123"
>123< .= >2e+5<, result: string(7) "1232e+5"
>123< .= ><, result: string(3) "123"
>123< .= >abc<, result: string(6) "123abc"
>123< .= >9223372036854775807<, result: string(22) "1239223372036854775807"
-------------------------------------
>2e+5< .= >0<, result: string(5) "2e+50"
>2e+5< .= >-10<, result: string(7) "2e+5-10"
>2e+5< .= >100<, result: string(7) "2e+5100"
>2e+5< .= >-34000000000<, result: string(16) "2e+5-34000000000"
>2e+5< .= >INF<, result: string(7) "2e+5INF"
>2e+5< .= >-INF<, result: string(8) "2e+5-INF"
>2e+5< .= >NAN<, result: string(7) "2e+5NAN"
>2e+5< .= >1<, result: string(5) "2e+51"
>2e+5< .= ><, result: string(4) "2e+5"
>2e+5< .= ><, result: string(4) "2e+5"
>2e+5< .= >123<, result: string(7) "2e+5123"
>2e+5< .= >2e+5<, result: string(8) "2e+52e+5"
>2e+5< .= ><, result: string(4) "2e+5"
>2e+5< .= >abc<, result: string(7) "2e+5abc"
>2e+5< .= >9223372036854775807<, result: string(23) "2e+59223372036854775807"
-------------------------------------
>< .= >0<, result: string(1) "0"
>< .= >-10<, result: string(3) "-10"
>< .= >100<, result: string(3) "100"
>< .= >-34000000000<, result: string(12) "-34000000000"
>< .= >INF<, result: string(3) "INF"
>< .= >-INF<, result: string(4) "-INF"
>< .= >NAN<, result: string(3) "NAN"
>< .= >1<, result: string(1) "1"
>< .= ><, result: string(0) ""
>< .= ><, result: string(0) ""
>< .= >123<, result: string(3) "123"
>< .= >2e+5<, result: string(4) "2e+5"
>< .= ><, result: string(0) ""
>< .= >abc<, result: string(3) "abc"
>< .= >9223372036854775807<, result: string(19) "9223372036854775807"
-------------------------------------
>abc< .= >0<, result: string(4) "abc0"
>abc< .= >-10<, result: string(6) "abc-10"
>abc< .= >100<, result: string(6) "abc100"
>abc< .= >-34000000000<, result: string(15) "abc-34000000000"
>abc< .= >INF<, result: string(6) "abcINF"
>abc< .= >-INF<, result: string(7) "abc-INF"
>abc< .= >NAN<, result: string(6) "abcNAN"
>abc< .= >1<, result: string(4) "abc1"
>abc< .= ><, result: string(3) "abc"
>abc< .= ><, result: string(3) "abc"
>abc< .= >123<, result: string(6) "abc123"
>abc< .= >2e+5<, result: string(7) "abc2e+5"
>abc< .= ><, result: string(3) "abc"
>abc< .= >abc<, result: string(6) "abcabc"
>abc< .= >9223372036854775807<, result: string(22) "abc9223372036854775807"
-------------------------------------
>9223372036854775807< .= >0<, result: string(20) "92233720368547758070"
>9223372036854775807< .= >-10<, result: string(22) "9223372036854775807-10"
>9223372036854775807< .= >100<, result: string(22) "9223372036854775807100"
>9223372036854775807< .= >-34000000000<, result: string(31) "9223372036854775807-34000000000"
>9223372036854775807< .= >INF<, result: string(22) "9223372036854775807INF"
>9223372036854775807< .= >-INF<, result: string(23) "9223372036854775807-INF"
>9223372036854775807< .= >NAN<, result: string(22) "9223372036854775807NAN"
>9223372036854775807< .= >1<, result: string(20) "92233720368547758071"
>9223372036854775807< .= ><, result: string(19) "9223372036854775807"
>9223372036854775807< .= ><, result: string(19) "9223372036854775807"
>9223372036854775807< .= >123<, result: string(22) "9223372036854775807123"
>9223372036854775807< .= >2e+5<, result: string(23) "92233720368547758072e+5"
>9223372036854775807< .= ><, result: string(19) "9223372036854775807"
>9223372036854775807< .= >abc<, result: string(22) "9223372036854775807abc"
>9223372036854775807< .= >9223372036854775807<, result: string(38) "92233720368547758079223372036854775807"
-------------------------------------
>0< <<= >0<, result: int(0)
>0< <<= >-10<, result: int(0)
>0< <<= >100<, result: int(0)
>0< <<= >-34000000000<, result: int(0)
>0< <<= >INF<, result: int(0)
>0< <<= >-INF<, result: int(0)
>0< <<= >NAN<, result: int(0)
>0< <<= >1<, result: int(0)
>0< <<= ><, result: int(0)
>0< <<= ><, result: int(0)
>0< <<= >123<, result: int(0)
>0< <<= >2e+5<, result: int(0)
>0< <<= ><, result: int(0)
>0< <<= >abc<, result: int(0)
>0< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< <<= >0<, result: int(-10)
>-10< <<= >-10<, result: int(-180143985094819840)
>-10< <<= >100<, result: int(-687194767360)
>-10< <<= >-34000000000<, result: int(-10)
>-10< <<= >INF<, result: int(-10)
>-10< <<= >-INF<, result: int(-10)
>-10< <<= >NAN<, result: int(-10)
>-10< <<= >1<, result: int(-20)
>-10< <<= ><, result: int(-10)
>-10< <<= ><, result: int(-10)
>-10< <<= >123<, result: int(-5764607523034234880)
>-10< <<= >2e+5<, result: int(-40)
>-10< <<= ><, result: int(-10)
>-10< <<= >abc<, result: int(-10)
>-10< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>100< <<= >0<, result: int(100)
>100< <<= >-10<, result: int(1801439850948198400)
>100< <<= >100<, result: int(6871947673600)
>100< <<= >-34000000000<, result: int(100)
>100< <<= >INF<, result: int(100)
>100< <<= >-INF<, result: int(100)
>100< <<= >NAN<, result: int(100)
>100< <<= >1<, result: int(200)
>100< <<= ><, result: int(100)
>100< <<= ><, result: int(100)
>100< <<= >123<, result: int(2305843009213693952)
>100< <<= >2e+5<, result: int(400)
>100< <<= ><, result: int(100)
>100< <<= >abc<, result: int(100)
>100< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>-34000000000< <<= >0<, result: int(-34000000000)
>-34000000000< <<= >-10<, result: int(0)
>-34000000000< <<= >100<, result: int(6274288337113055232)
>-34000000000< <<= >-34000000000<, result: int(-34000000000)
>-34000000000< <<= >INF<, result: int(-34000000000)
>-34000000000< <<= >-INF<, result: int(-34000000000)
>-34000000000< <<= >NAN<, result: int(-34000000000)
>-34000000000< <<= >1<, result: int(-68000000000)
>-34000000000< <<= ><, result: int(-34000000000)
>-34000000000< <<= ><, result: int(-34000000000)
>-34000000000< <<= >123<, result: int(0)
>-34000000000< <<= >2e+5<, result: int(-136000000000)
>-34000000000< <<= ><, result: int(-34000000000)
>-34000000000< <<= >abc<, result: int(-34000000000)
>-34000000000< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>INF< <<= >0<, result: int(-9223372036854775808)
>INF< <<= >-10<, result: int(0)
>INF< <<= >100<, result: int(0)
>INF< <<= >-34000000000<, result: int(-9223372036854775808)
>INF< <<= >INF<, result: int(-9223372036854775808)
>INF< <<= >-INF<, result: int(-9223372036854775808)
>INF< <<= >NAN<, result: int(-9223372036854775808)
>INF< <<= >1<, result: int(0)
>INF< <<= ><, result: int(-9223372036854775808)
>INF< <<= ><, result: int(-9223372036854775808)
>INF< <<= >123<, result: int(0)
>INF< <<= >2e+5<, result: int(0)
>INF< <<= ><, result: int(-9223372036854775808)
>INF< <<= >abc<, result: int(-9223372036854775808)
>INF< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>-INF< <<= >0<, result: int(-9223372036854775808)
>-INF< <<= >-10<, result: int(0)
>-INF< <<= >100<, result: int(0)
>-INF< <<= >-34000000000<, result: int(-9223372036854775808)
>-INF< <<= >INF<, result: int(-9223372036854775808)
>-INF< <<= >-INF<, result: int(-9223372036854775808)
>-INF< <<= >NAN<, result: int(-9223372036854775808)
>-INF< <<= >1<, result: int(0)
>-INF< <<= ><, result: int(-9223372036854775808)
>-INF< <<= ><, result: int(-9223372036854775808)
>-INF< <<= >123<, result: int(0)
>-INF< <<= >2e+5<, result: int(0)
>-INF< <<= ><, result: int(-9223372036854775808)
>-INF< <<= >abc<, result: int(-9223372036854775808)
>-INF< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>NAN< <<= >0<, result: int(-9223372036854775808)
>NAN< <<= >-10<, result: int(0)
>NAN< <<= >100<, result: int(0)
>NAN< <<= >-34000000000<, result: int(-9223372036854775808)
>NAN< <<= >INF<, result: int(-9223372036854775808)
>NAN< <<= >-INF<, result: int(-9223372036854775808)
>NAN< <<= >NAN<, result: int(-9223372036854775808)
>NAN< <<= >1<, result: int(0)
>NAN< <<= ><, result: int(-9223372036854775808)
>NAN< <<= ><, result: int(-9223372036854775808)
>NAN< <<= >123<, result: int(0)
>NAN< <<= >2e+5<, result: int(0)
>NAN< <<= ><, result: int(-9223372036854775808)
>NAN< <<= >abc<, result: int(-9223372036854775808)
>NAN< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>1< <<= >0<, result: int(1)
>1< <<= >-10<, result: int(18014398509481984)
>1< <<= >100<, result: int(68719476736)
>1< <<= >-34000000000<, result: int(1)
>1< <<= >INF<, result: int(1)
>1< <<= >-INF<, result: int(1)
>1< <<= >NAN<, result: int(1)
>1< <<= >1<, result: int(2)
>1< <<= ><, result: int(1)
>1< <<= ><, result: int(1)
>1< <<= >123<, result: int(576460752303423488)
>1< <<= >2e+5<, result: int(4)
>1< <<= ><, result: int(1)
>1< <<= >abc<, result: int(1)
>1< <<= >9223372036854775807<, result: int(-9223372036854775808)
-------------------------------------
>< <<= >0<, result: int(0)
>< <<= >-10<, result: int(0)
>< <<= >100<, result: int(0)
>< <<= >-34000000000<, result: int(0)
>< <<= >INF<, result: int(0)
>< <<= >-INF<, result: int(0)
>< <<= >NAN<, result: int(0)
>< <<= >1<, result: int(0)
>< <<= ><, result: int(0)
>< <<= ><, result: int(0)
>< <<= >123<, result: int(0)
>< <<= >2e+5<, result: int(0)
>< <<= ><, result: int(0)
>< <<= >abc<, result: int(0)
>< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>< <<= >0<, result: int(0)
>< <<= >-10<, result: int(0)
>< <<= >100<, result: int(0)
>< <<= >-34000000000<, result: int(0)
>< <<= >INF<, result: int(0)
>< <<= >-INF<, result: int(0)
>< <<= >NAN<, result: int(0)
>< <<= >1<, result: int(0)
>< <<= ><, result: int(0)
>< <<= ><, result: int(0)
>< <<= >123<, result: int(0)
>< <<= >2e+5<, result: int(0)
>< <<= ><, result: int(0)
>< <<= >abc<, result: int(0)
>< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>123< <<= >0<, result: int(123)
>123< <<= >-10<, result: int(2215771016666284032)
>123< <<= >100<, result: int(8452495638528)
>123< <<= >-34000000000<, result: int(123)
>123< <<= >INF<, result: int(123)
>123< <<= >-INF<, result: int(123)
>123< <<= >NAN<, result: int(123)
>123< <<= >1<, result: int(246)
>123< <<= ><, result: int(123)
>123< <<= ><, result: int(123)
>123< <<= >123<, result: int(-2882303761517117440)
>123< <<= >2e+5<, result: int(492)
>123< <<= ><, result: int(123)
>123< <<= >abc<, result: int(123)
>123< <<= >9223372036854775807<, result: int(-9223372036854775808)
-------------------------------------
>2e+5< <<= >0<, result: int(2)
>2e+5< <<= >-10<, result: int(36028797018963968)
>2e+5< <<= >100<, result: int(137438953472)
>2e+5< <<= >-34000000000<, result: int(2)
>2e+5< <<= >INF<, result: int(2)
>2e+5< <<= >-INF<, result: int(2)
>2e+5< <<= >NAN<, result: int(2)
>2e+5< <<= >1<, result: int(4)
>2e+5< <<= ><, result: int(2)
>2e+5< <<= ><, result: int(2)
>2e+5< <<= >123<, result: int(1152921504606846976)
>2e+5< <<= >2e+5<, result: int(8)
>2e+5< <<= ><, result: int(2)
>2e+5< <<= >abc<, result: int(2)
>2e+5< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>< <<= >0<, result: int(0)
>< <<= >-10<, result: int(0)
>< <<= >100<, result: int(0)
>< <<= >-34000000000<, result: int(0)
>< <<= >INF<, result: int(0)
>< <<= >-INF<, result: int(0)
>< <<= >NAN<, result: int(0)
>< <<= >1<, result: int(0)
>< <<= ><, result: int(0)
>< <<= ><, result: int(0)
>< <<= >123<, result: int(0)
>< <<= >2e+5<, result: int(0)
>< <<= ><, result: int(0)
>< <<= >abc<, result: int(0)
>< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< <<= >0<, result: int(0)
>abc< <<= >-10<, result: int(0)
>abc< <<= >100<, result: int(0)
>abc< <<= >-34000000000<, result: int(0)
>abc< <<= >INF<, result: int(0)
>abc< <<= >-INF<, result: int(0)
>abc< <<= >NAN<, result: int(0)
>abc< <<= >1<, result: int(0)
>abc< <<= ><, result: int(0)
>abc< <<= ><, result: int(0)
>abc< <<= >123<, result: int(0)
>abc< <<= >2e+5<, result: int(0)
>abc< <<= ><, result: int(0)
>abc< <<= >abc<, result: int(0)
>abc< <<= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< <<= >0<, result: int(9223372036854775807)
>9223372036854775807< <<= >-10<, result: int(-18014398509481984)
>9223372036854775807< <<= >100<, result: int(-68719476736)
>9223372036854775807< <<= >-34000000000<, result: int(9223372036854775807)
>9223372036854775807< <<= >INF<, result: int(9223372036854775807)
>9223372036854775807< <<= >-INF<, result: int(9223372036854775807)
>9223372036854775807< <<= >NAN<, result: int(9223372036854775807)
>9223372036854775807< <<= >1<, result: int(-2)
>9223372036854775807< <<= ><, result: int(9223372036854775807)
>9223372036854775807< <<= ><, result: int(9223372036854775807)
>9223372036854775807< <<= >123<, result: int(-576460752303423488)
>9223372036854775807< <<= >2e+5<, result: int(-4)
>9223372036854775807< <<= ><, result: int(9223372036854775807)
>9223372036854775807< <<= >abc<, result: int(9223372036854775807)
>9223372036854775807< <<= >9223372036854775807<, result: int(-9223372036854775808)
-------------------------------------
>0< >>= >0<, result: int(0)
>0< >>= >-10<, result: int(0)
>0< >>= >100<, result: int(0)
>0< >>= >-34000000000<, result: int(0)
>0< >>= >INF<, result: int(0)
>0< >>= >-INF<, result: int(0)
>0< >>= >NAN<, result: int(0)
>0< >>= >1<, result: int(0)
>0< >>= ><, result: int(0)
>0< >>= ><, result: int(0)
>0< >>= >123<, result: int(0)
>0< >>= >2e+5<, result: int(0)
>0< >>= ><, result: int(0)
>0< >>= >abc<, result: int(0)
>0< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< >>= >0<, result: int(-10)
>-10< >>= >-10<, result: int(-1)
>-10< >>= >100<, result: int(-1)
>-10< >>= >-34000000000<, result: int(-10)
>-10< >>= >INF<, result: int(-10)
>-10< >>= >-INF<, result: int(-10)
>-10< >>= >NAN<, result: int(-10)
>-10< >>= >1<, result: int(-5)
>-10< >>= ><, result: int(-10)
>-10< >>= ><, result: int(-10)
>-10< >>= >123<, result: int(-1)
>-10< >>= >2e+5<, result: int(-3)
>-10< >>= ><, result: int(-10)
>-10< >>= >abc<, result: int(-10)
>-10< >>= >9223372036854775807<, result: int(-1)
-------------------------------------
>100< >>= >0<, result: int(100)
>100< >>= >-10<, result: int(0)
>100< >>= >100<, result: int(0)
>100< >>= >-34000000000<, result: int(100)
>100< >>= >INF<, result: int(100)
>100< >>= >-INF<, result: int(100)
>100< >>= >NAN<, result: int(100)
>100< >>= >1<, result: int(50)
>100< >>= ><, result: int(100)
>100< >>= ><, result: int(100)
>100< >>= >123<, result: int(0)
>100< >>= >2e+5<, result: int(25)
>100< >>= ><, result: int(100)
>100< >>= >abc<, result: int(100)
>100< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>-34000000000< >>= >0<, result: int(-34000000000)
>-34000000000< >>= >-10<, result: int(-1)
>-34000000000< >>= >100<, result: int(-1)
>-34000000000< >>= >-34000000000<, result: int(-34000000000)
>-34000000000< >>= >INF<, result: int(-34000000000)
>-34000000000< >>= >-INF<, result: int(-34000000000)
>-34000000000< >>= >NAN<, result: int(-34000000000)
>-34000000000< >>= >1<, result: int(-17000000000)
>-34000000000< >>= ><, result: int(-34000000000)
>-34000000000< >>= ><, result: int(-34000000000)
>-34000000000< >>= >123<, result: int(-1)
>-34000000000< >>= >2e+5<, result: int(-8500000000)
>-34000000000< >>= ><, result: int(-34000000000)
>-34000000000< >>= >abc<, result: int(-34000000000)
>-34000000000< >>= >9223372036854775807<, result: int(-1)
-------------------------------------
>INF< >>= >0<, result: int(-9223372036854775808)
>INF< >>= >-10<, result: int(-512)
>INF< >>= >100<, result: int(-134217728)
>INF< >>= >-34000000000<, result: int(-9223372036854775808)
>INF< >>= >INF<, result: int(-9223372036854775808)
>INF< >>= >-INF<, result: int(-9223372036854775808)
>INF< >>= >NAN<, result: int(-9223372036854775808)
>INF< >>= >1<, result: int(-4611686018427387904)
>INF< >>= ><, result: int(-9223372036854775808)
>INF< >>= ><, result: int(-9223372036854775808)
>INF< >>= >123<, result: int(-16)
>INF< >>= >2e+5<, result: int(-2305843009213693952)
>INF< >>= ><, result: int(-9223372036854775808)
>INF< >>= >abc<, result: int(-9223372036854775808)
>INF< >>= >9223372036854775807<, result: int(-1)
-------------------------------------
>-INF< >>= >0<, result: int(-9223372036854775808)
>-INF< >>= >-10<, result: int(-512)
>-INF< >>= >100<, result: int(-134217728)
>-INF< >>= >-34000000000<, result: int(-9223372036854775808)
>-INF< >>= >INF<, result: int(-9223372036854775808)
>-INF< >>= >-INF<, result: int(-9223372036854775808)
>-INF< >>= >NAN<, result: int(-9223372036854775808)
>-INF< >>= >1<, result: int(-4611686018427387904)
>-INF< >>= ><, result: int(-9223372036854775808)
>-INF< >>= ><, result: int(-9223372036854775808)
>-INF< >>= >123<, result: int(-16)
>-INF< >>= >2e+5<, result: int(-2305843009213693952)
>-INF< >>= ><, result: int(-9223372036854775808)
>-INF< >>= >abc<, result: int(-9223372036854775808)
>-INF< >>= >9223372036854775807<, result: int(-1)
-------------------------------------
>NAN< >>= >0<, result: int(-9223372036854775808)
>NAN< >>= >-10<, result: int(-512)
>NAN< >>= >100<, result: int(-134217728)
>NAN< >>= >-34000000000<, result: int(-9223372036854775808)
>NAN< >>= >INF<, result: int(-9223372036854775808)
>NAN< >>= >-INF<, result: int(-9223372036854775808)
>NAN< >>= >NAN<, result: int(-9223372036854775808)
>NAN< >>= >1<, result: int(-4611686018427387904)
>NAN< >>= ><, result: int(-9223372036854775808)
>NAN< >>= ><, result: int(-9223372036854775808)
>NAN< >>= >123<, result: int(-16)
>NAN< >>= >2e+5<, result: int(-2305843009213693952)
>NAN< >>= ><, result: int(-9223372036854775808)
>NAN< >>= >abc<, result: int(-9223372036854775808)
>NAN< >>= >9223372036854775807<, result: int(-1)
-------------------------------------
>1< >>= >0<, result: int(1)
>1< >>= >-10<, result: int(0)
>1< >>= >100<, result: int(0)
>1< >>= >-34000000000<, result: int(1)
>1< >>= >INF<, result: int(1)
>1< >>= >-INF<, result: int(1)
>1< >>= >NAN<, result: int(1)
>1< >>= >1<, result: int(0)
>1< >>= ><, result: int(1)
>1< >>= ><, result: int(1)
>1< >>= >123<, result: int(0)
>1< >>= >2e+5<, result: int(0)
>1< >>= ><, result: int(1)
>1< >>= >abc<, result: int(1)
>1< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>< >>= >0<, result: int(0)
>< >>= >-10<, result: int(0)
>< >>= >100<, result: int(0)
>< >>= >-34000000000<, result: int(0)
>< >>= >INF<, result: int(0)
>< >>= >-INF<, result: int(0)
>< >>= >NAN<, result: int(0)
>< >>= >1<, result: int(0)
>< >>= ><, result: int(0)
>< >>= ><, result: int(0)
>< >>= >123<, result: int(0)
>< >>= >2e+5<, result: int(0)
>< >>= ><, result: int(0)
>< >>= >abc<, result: int(0)
>< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>< >>= >0<, result: int(0)
>< >>= >-10<, result: int(0)
>< >>= >100<, result: int(0)
>< >>= >-34000000000<, result: int(0)
>< >>= >INF<, result: int(0)
>< >>= >-INF<, result: int(0)
>< >>= >NAN<, result: int(0)
>< >>= >1<, result: int(0)
>< >>= ><, result: int(0)
>< >>= ><, result: int(0)
>< >>= >123<, result: int(0)
>< >>= >2e+5<, result: int(0)
>< >>= ><, result: int(0)
>< >>= >abc<, result: int(0)
>< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>123< >>= >0<, result: int(123)
>123< >>= >-10<, result: int(0)
>123< >>= >100<, result: int(0)
>123< >>= >-34000000000<, result: int(123)
>123< >>= >INF<, result: int(123)
>123< >>= >-INF<, result: int(123)
>123< >>= >NAN<, result: int(123)
>123< >>= >1<, result: int(61)
>123< >>= ><, result: int(123)
>123< >>= ><, result: int(123)
>123< >>= >123<, result: int(0)
>123< >>= >2e+5<, result: int(30)
>123< >>= ><, result: int(123)
>123< >>= >abc<, result: int(123)
>123< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>2e+5< >>= >0<, result: int(2)
>2e+5< >>= >-10<, result: int(0)
>2e+5< >>= >100<, result: int(0)
>2e+5< >>= >-34000000000<, result: int(2)
>2e+5< >>= >INF<, result: int(2)
>2e+5< >>= >-INF<, result: int(2)
>2e+5< >>= >NAN<, result: int(2)
>2e+5< >>= >1<, result: int(1)
>2e+5< >>= ><, result: int(2)
>2e+5< >>= ><, result: int(2)
>2e+5< >>= >123<, result: int(0)
>2e+5< >>= >2e+5<, result: int(0)
>2e+5< >>= ><, result: int(2)
>2e+5< >>= >abc<, result: int(2)
>2e+5< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>< >>= >0<, result: int(0)
>< >>= >-10<, result: int(0)
>< >>= >100<, result: int(0)
>< >>= >-34000000000<, result: int(0)
>< >>= >INF<, result: int(0)
>< >>= >-INF<, result: int(0)
>< >>= >NAN<, result: int(0)
>< >>= >1<, result: int(0)
>< >>= ><, result: int(0)
>< >>= ><, result: int(0)
>< >>= >123<, result: int(0)
>< >>= >2e+5<, result: int(0)
>< >>= ><, result: int(0)
>< >>= >abc<, result: int(0)
>< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< >>= >0<, result: int(0)
>abc< >>= >-10<, result: int(0)
>abc< >>= >100<, result: int(0)
>abc< >>= >-34000000000<, result: int(0)
>abc< >>= >INF<, result: int(0)
>abc< >>= >-INF<, result: int(0)
>abc< >>= >NAN<, result: int(0)
>abc< >>= >1<, result: int(0)
>abc< >>= ><, result: int(0)
>abc< >>= ><, result: int(0)
>abc< >>= >123<, result: int(0)
>abc< >>= >2e+5<, result: int(0)
>abc< >>= ><, result: int(0)
>abc< >>= >abc<, result: int(0)
>abc< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< >>= >0<, result: int(9223372036854775807)
>9223372036854775807< >>= >-10<, result: int(511)
>9223372036854775807< >>= >100<, result: int(134217727)
>9223372036854775807< >>= >-34000000000<, result: int(9223372036854775807)
>9223372036854775807< >>= >INF<, result: int(9223372036854775807)
>9223372036854775807< >>= >-INF<, result: int(9223372036854775807)
>9223372036854775807< >>= >NAN<, result: int(9223372036854775807)
>9223372036854775807< >>= >1<, result: int(4611686018427387903)
>9223372036854775807< >>= ><, result: int(9223372036854775807)
>9223372036854775807< >>= ><, result: int(9223372036854775807)
>9223372036854775807< >>= >123<, result: int(15)
>9223372036854775807< >>= >2e+5<, result: int(2305843009213693951)
>9223372036854775807< >>= ><, result: int(9223372036854775807)
>9223372036854775807< >>= >abc<, result: int(9223372036854775807)
>9223372036854775807< >>= >9223372036854775807<, result: int(0)
-------------------------------------
>0< &= >0<, result: int(0)
>0< &= >-10<, result: int(0)
>0< &= >100<, result: int(0)
>0< &= >-34000000000<, result: int(0)
>0< &= >INF<, result: int(0)
>0< &= >-INF<, result: int(0)
>0< &= >NAN<, result: int(0)
>0< &= >1<, result: int(0)
>0< &= ><, result: int(0)
>0< &= ><, result: int(0)
>0< &= >123<, result: int(0)
>0< &= >2e+5<, result: int(0)
>0< &= ><, result: int(0)
>0< &= >abc<, result: int(0)
>0< &= >9223372036854775807<, result: int(0)
-------------------------------------
>-10< &= >0<, result: int(0)
>-10< &= >-10<, result: int(-10)
>-10< &= >100<, result: int(100)
>-10< &= >-34000000000<, result: int(-34000000000)
>-10< &= >INF<, result: int(-9223372036854775808)
>-10< &= >-INF<, result: int(-9223372036854775808)
>-10< &= >NAN<, result: int(-9223372036854775808)
>-10< &= >1<, result: int(0)
>-10< &= ><, result: int(0)
>-10< &= ><, result: int(0)
>-10< &= >123<, result: int(114)
>-10< &= >2e+5<, result: int(2)
>-10< &= ><, result: int(0)
>-10< &= >abc<, result: int(0)
>-10< &= >9223372036854775807<, result: int(9223372036854775798)
-------------------------------------
>100< &= >0<, result: int(0)
>100< &= >-10<, result: int(100)
>100< &= >100<, result: int(100)
>100< &= >-34000000000<, result: int(0)
>100< &= >INF<, result: int(0)
>100< &= >-INF<, result: int(0)
>100< &= >NAN<, result: int(0)
>100< &= >1<, result: int(0)
>100< &= ><, result: int(0)
>100< &= ><, result: int(0)
>100< &= >123<, result: int(96)
>100< &= >2e+5<, result: int(0)
>100< &= ><, result: int(0)
>100< &= >abc<, result: int(0)
>100< &= >9223372036854775807<, result: int(100)
-------------------------------------
>-34000000000< &= >0<, result: int(0)
>-34000000000< &= >-10<, result: int(-34000000000)
>-34000000000< &= >100<, result: int(0)
>-34000000000< &= >-34000000000<, result: int(-34000000000)
>-34000000000< &= >INF<, result: int(-9223372036854775808)
>-34000000000< &= >-INF<, result: int(-9223372036854775808)
>-34000000000< &= >NAN<, result: int(-9223372036854775808)
>-34000000000< &= >1<, result: int(0)
>-34000000000< &= ><, result: int(0)
>-34000000000< &= ><, result: int(0)
>-34000000000< &= >123<, result: int(0)
>-34000000000< &= >2e+5<, result: int(0)
>-34000000000< &= ><, result: int(0)
>-34000000000< &= >abc<, result: int(0)
>-34000000000< &= >9223372036854775807<, result: int(9223372002854775808)
-------------------------------------
>INF< &= >0<, result: int(0)
>INF< &= >-10<, result: int(-9223372036854775808)
>INF< &= >100<, result: int(0)
>INF< &= >-34000000000<, result: int(-9223372036854775808)
>INF< &= >INF<, result: int(-9223372036854775808)
>INF< &= >-INF<, result: int(-9223372036854775808)
>INF< &= >NAN<, result: int(-9223372036854775808)
>INF< &= >1<, result: int(0)
>INF< &= ><, result: int(0)
>INF< &= ><, result: int(0)
>INF< &= >123<, result: int(0)
>INF< &= >2e+5<, result: int(0)
>INF< &= ><, result: int(0)
>INF< &= >abc<, result: int(0)
>INF< &= >9223372036854775807<, result: int(0)
-------------------------------------
>-INF< &= >0<, result: int(0)
>-INF< &= >-10<, result: int(-9223372036854775808)
>-INF< &= >100<, result: int(0)
>-INF< &= >-34000000000<, result: int(-9223372036854775808)
>-INF< &= >INF<, result: int(-9223372036854775808)
>-INF< &= >-INF<, result: int(-9223372036854775808)
>-INF< &= >NAN<, result: int(-9223372036854775808)
>-INF< &= >1<, result: int(0)
>-INF< &= ><, result: int(0)
>-INF< &= ><, result: int(0)
>-INF< &= >123<, result: int(0)
>-INF< &= >2e+5<, result: int(0)
>-INF< &= ><, result: int(0)
>-INF< &= >abc<, result: int(0)
>-INF< &= >9223372036854775807<, result: int(0)
-------------------------------------
>NAN< &= >0<, result: int(0)
>NAN< &= >-10<, result: int(-9223372036854775808)
>NAN< &= >100<, result: int(0)
>NAN< &= >-34000000000<, result: int(-9223372036854775808)
>NAN< &= >INF<, result: int(-9223372036854775808)
>NAN< &= >-INF<, result: int(-9223372036854775808)
>NAN< &= >NAN<, result: int(-9223372036854775808)
>NAN< &= >1<, result: int(0)
>NAN< &= ><, result: int(0)
>NAN< &= ><, result: int(0)
>NAN< &= >123<, result: int(0)
>NAN< &= >2e+5<, result: int(0)
>NAN< &= ><, result: int(0)
>NAN< &= >abc<, result: int(0)
>NAN< &= >9223372036854775807<, result: int(0)
-------------------------------------
>1< &= >0<, result: int(0)
>1< &= >-10<, result: int(0)
>1< &= >100<, result: int(0)
>1< &= >-34000000000<, result: int(0)
>1< &= >INF<, result: int(0)
>1< &= >-INF<, result: int(0)
>1< &= >NAN<, result: int(0)
>1< &= >1<, result: int(1)
>1< &= ><, result: int(0)
>1< &= ><, result: int(0)
>1< &= >123<, result: int(1)
>1< &= >2e+5<, result: int(0)
>1< &= ><, result: int(0)
>1< &= >abc<, result: int(0)
>1< &= >9223372036854775807<, result: int(1)
-------------------------------------
>< &= >0<, result: int(0)
>< &= >-10<, result: int(0)
>< &= >100<, result: int(0)
>< &= >-34000000000<, result: int(0)
>< &= >INF<, result: int(0)
>< &= >-INF<, result: int(0)
>< &= >NAN<, result: int(0)
>< &= >1<, result: int(0)
>< &= ><, result: int(0)
>< &= ><, result: int(0)
>< &= >123<, result: int(0)
>< &= >2e+5<, result: int(0)
>< &= ><, result: int(0)
>< &= >abc<, result: int(0)
>< &= >9223372036854775807<, result: int(0)
-------------------------------------
>< &= >0<, result: int(0)
>< &= >-10<, result: int(0)
>< &= >100<, result: int(0)
>< &= >-34000000000<, result: int(0)
>< &= >INF<, result: int(0)
>< &= >-INF<, result: int(0)
>< &= >NAN<, result: int(0)
>< &= >1<, result: int(0)
>< &= ><, result: int(0)
>< &= ><, result: int(0)
>< &= >123<, result: int(0)
>< &= >2e+5<, result: int(0)
>< &= ><, result: int(0)
>< &= >abc<, result: int(0)
>< &= >9223372036854775807<, result: int(0)
-------------------------------------
>123< &= >0<, result: int(0)
>123< &= >-10<, result: int(114)
>123< &= >100<, result: int(96)
>123< &= >-34000000000<, result: int(0)
>123< &= >INF<, result: int(0)
>123< &= >-INF<, result: int(0)
>123< &= >NAN<, result: int(0)
>123< &= >1<, result: int(1)
>123< &= ><, result: int(0)
>123< &= ><, result: int(0)
>123< &= >123<, result: string(3) "123"
>123< &= >2e+5<, result: string(3) "0 #"
>123< &= ><, result: string(0) ""
>123< &= >abc<, result: string(3) "!"#"
>123< &= >9223372036854775807<, result: int(123)
-------------------------------------
>2e+5< &= >0<, result: int(0)
>2e+5< &= >-10<, result: int(2)
>2e+5< &= >100<, result: int(0)
>2e+5< &= >-34000000000<, result: int(0)
>2e+5< &= >INF<, result: int(0)
>2e+5< &= >-INF<, result: int(0)
>2e+5< &= >NAN<, result: int(0)
>2e+5< &= >1<, result: int(0)
>2e+5< &= ><, result: int(0)
>2e+5< &= ><, result: int(0)
>2e+5< &= >123<, result: string(3) "0 #"
>2e+5< &= >2e+5<, result: string(4) "2e+5"
>2e+5< &= ><, result: string(0) ""
>2e+5< &= >abc<, result: string(3) " `#"
>2e+5< &= >9223372036854775807<, result: int(2)
-------------------------------------
>< &= >0<, result: int(0)
>< &= >-10<, result: int(0)
>< &= >100<, result: int(0)
>< &= >-34000000000<, result: int(0)
>< &= >INF<, result: int(0)
>< &= >-INF<, result: int(0)
>< &= >NAN<, result: int(0)
>< &= >1<, result: int(0)
>< &= ><, result: int(0)
>< &= ><, result: int(0)
>< &= >123<, result: string(0) ""
>< &= >2e+5<, result: string(0) ""
>< &= ><, result: string(0) ""
>< &= >abc<, result: string(0) ""
>< &= >9223372036854775807<, result: int(0)
-------------------------------------
>abc< &= >0<, result: int(0)
>abc< &= >-10<, result: int(0)
>abc< &= >100<, result: int(0)
>abc< &= >-34000000000<, result: int(0)
>abc< &= >INF<, result: int(0)
>abc< &= >-INF<, result: int(0)
>abc< &= >NAN<, result: int(0)
>abc< &= >1<, result: int(0)
>abc< &= ><, result: int(0)
>abc< &= ><, result: int(0)
>abc< &= >123<, result: string(3) "!"#"
>abc< &= >2e+5<, result: string(3) " `#"
>abc< &= ><, result: string(0) ""
>abc< &= >abc<, result: string(3) "abc"
>abc< &= >9223372036854775807<, result: int(0)
-------------------------------------
>9223372036854775807< &= >0<, result: int(0)
>9223372036854775807< &= >-10<, result: int(9223372036854775798)
>9223372036854775807< &= >100<, result: int(100)
>9223372036854775807< &= >-34000000000<, result: int(9223372002854775808)
>9223372036854775807< &= >INF<, result: int(0)
>9223372036854775807< &= >-INF<, result: int(0)
>9223372036854775807< &= >NAN<, result: int(0)
>9223372036854775807< &= >1<, result: int(1)
>9223372036854775807< &= ><, result: int(0)
>9223372036854775807< &= ><, result: int(0)
>9223372036854775807< &= >123<, result: int(123)
>9223372036854775807< &= >2e+5<, result: int(2)
>9223372036854775807< &= ><, result: int(0)
>9223372036854775807< &= >abc<, result: int(0)
>9223372036854775807< &= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>0< ^= >0<, result: int(0)
>0< ^= >-10<, result: int(-10)
>0< ^= >100<, result: int(100)
>0< ^= >-34000000000<, result: int(-34000000000)
>0< ^= >INF<, result: int(-9223372036854775808)
>0< ^= >-INF<, result: int(-9223372036854775808)
>0< ^= >NAN<, result: int(-9223372036854775808)
>0< ^= >1<, result: int(1)
>0< ^= ><, result: int(0)
>0< ^= ><, result: int(0)
>0< ^= >123<, result: int(123)
>0< ^= >2e+5<, result: int(2)
>0< ^= ><, result: int(0)
>0< ^= >abc<, result: int(0)
>0< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-10< ^= >0<, result: int(-10)
>-10< ^= >-10<, result: int(0)
>-10< ^= >100<, result: int(-110)
>-10< ^= >-34000000000<, result: int(33999999990)
>-10< ^= >INF<, result: int(9223372036854775798)
>-10< ^= >-INF<, result: int(9223372036854775798)
>-10< ^= >NAN<, result: int(9223372036854775798)
>-10< ^= >1<, result: int(-9)
>-10< ^= ><, result: int(-10)
>-10< ^= ><, result: int(-10)
>-10< ^= >123<, result: int(-115)
>-10< ^= >2e+5<, result: int(-12)
>-10< ^= ><, result: int(-10)
>-10< ^= >abc<, result: int(-10)
>-10< ^= >9223372036854775807<, result: int(-9223372036854775799)
-------------------------------------
>100< ^= >0<, result: int(100)
>100< ^= >-10<, result: int(-110)
>100< ^= >100<, result: int(0)
>100< ^= >-34000000000<, result: int(-33999999900)
>100< ^= >INF<, result: int(-9223372036854775708)
>100< ^= >-INF<, result: int(-9223372036854775708)
>100< ^= >NAN<, result: int(-9223372036854775708)
>100< ^= >1<, result: int(101)
>100< ^= ><, result: int(100)
>100< ^= ><, result: int(100)
>100< ^= >123<, result: int(31)
>100< ^= >2e+5<, result: int(102)
>100< ^= ><, result: int(100)
>100< ^= >abc<, result: int(100)
>100< ^= >9223372036854775807<, result: int(9223372036854775707)
-------------------------------------
>-34000000000< ^= >0<, result: int(-34000000000)
>-34000000000< ^= >-10<, result: int(33999999990)
>-34000000000< ^= >100<, result: int(-33999999900)
>-34000000000< ^= >-34000000000<, result: int(0)
>-34000000000< ^= >INF<, result: int(9223372002854775808)
>-34000000000< ^= >-INF<, result: int(9223372002854775808)
>-34000000000< ^= >NAN<, result: int(9223372002854775808)
>-34000000000< ^= >1<, result: int(-33999999999)
>-34000000000< ^= ><, result: int(-34000000000)
>-34000000000< ^= ><, result: int(-34000000000)
>-34000000000< ^= >123<, result: int(-33999999877)
>-34000000000< ^= >2e+5<, result: int(-33999999998)
>-34000000000< ^= ><, result: int(-34000000000)
>-34000000000< ^= >abc<, result: int(-34000000000)
>-34000000000< ^= >9223372036854775807<, result: int(-9223372002854775809)
-------------------------------------
>INF< ^= >0<, result: int(-9223372036854775808)
>INF< ^= >-10<, result: int(9223372036854775798)
>INF< ^= >100<, result: int(-9223372036854775708)
>INF< ^= >-34000000000<, result: int(9223372002854775808)
>INF< ^= >INF<, result: int(0)
>INF< ^= >-INF<, result: int(0)
>INF< ^= >NAN<, result: int(0)
>INF< ^= >1<, result: int(-9223372036854775807)
>INF< ^= ><, result: int(-9223372036854775808)
>INF< ^= ><, result: int(-9223372036854775808)
>INF< ^= >123<, result: int(-9223372036854775685)
>INF< ^= >2e+5<, result: int(-9223372036854775806)
>INF< ^= ><, result: int(-9223372036854775808)
>INF< ^= >abc<, result: int(-9223372036854775808)
>INF< ^= >9223372036854775807<, result: int(-1)
-------------------------------------
>-INF< ^= >0<, result: int(-9223372036854775808)
>-INF< ^= >-10<, result: int(9223372036854775798)
>-INF< ^= >100<, result: int(-9223372036854775708)
>-INF< ^= >-34000000000<, result: int(9223372002854775808)
>-INF< ^= >INF<, result: int(0)
>-INF< ^= >-INF<, result: int(0)
>-INF< ^= >NAN<, result: int(0)
>-INF< ^= >1<, result: int(-9223372036854775807)
>-INF< ^= ><, result: int(-9223372036854775808)
>-INF< ^= ><, result: int(-9223372036854775808)
>-INF< ^= >123<, result: int(-9223372036854775685)
>-INF< ^= >2e+5<, result: int(-9223372036854775806)
>-INF< ^= ><, result: int(-9223372036854775808)
>-INF< ^= >abc<, result: int(-9223372036854775808)
>-INF< ^= >9223372036854775807<, result: int(-1)
-------------------------------------
>NAN< ^= >0<, result: int(-9223372036854775808)
>NAN< ^= >-10<, result: int(9223372036854775798)
>NAN< ^= >100<, result: int(-9223372036854775708)
>NAN< ^= >-34000000000<, result: int(9223372002854775808)
>NAN< ^= >INF<, result: int(0)
>NAN< ^= >-INF<, result: int(0)
>NAN< ^= >NAN<, result: int(0)
>NAN< ^= >1<, result: int(-9223372036854775807)
>NAN< ^= ><, result: int(-9223372036854775808)
>NAN< ^= ><, result: int(-9223372036854775808)
>NAN< ^= >123<, result: int(-9223372036854775685)
>NAN< ^= >2e+5<, result: int(-9223372036854775806)
>NAN< ^= ><, result: int(-9223372036854775808)
>NAN< ^= >abc<, result: int(-9223372036854775808)
>NAN< ^= >9223372036854775807<, result: int(-1)
-------------------------------------
>1< ^= >0<, result: int(1)
>1< ^= >-10<, result: int(-9)
>1< ^= >100<, result: int(101)
>1< ^= >-34000000000<, result: int(-33999999999)
>1< ^= >INF<, result: int(-9223372036854775807)
>1< ^= >-INF<, result: int(-9223372036854775807)
>1< ^= >NAN<, result: int(-9223372036854775807)
>1< ^= >1<, result: int(0)
>1< ^= ><, result: int(1)
>1< ^= ><, result: int(1)
>1< ^= >123<, result: int(122)
>1< ^= >2e+5<, result: int(3)
>1< ^= ><, result: int(1)
>1< ^= >abc<, result: int(1)
>1< ^= >9223372036854775807<, result: int(9223372036854775806)
-------------------------------------
>< ^= >0<, result: int(0)
>< ^= >-10<, result: int(-10)
>< ^= >100<, result: int(100)
>< ^= >-34000000000<, result: int(-34000000000)
>< ^= >INF<, result: int(-9223372036854775808)
>< ^= >-INF<, result: int(-9223372036854775808)
>< ^= >NAN<, result: int(-9223372036854775808)
>< ^= >1<, result: int(1)
>< ^= ><, result: int(0)
>< ^= ><, result: int(0)
>< ^= >123<, result: int(123)
>< ^= >2e+5<, result: int(2)
>< ^= ><, result: int(0)
>< ^= >abc<, result: int(0)
>< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< ^= >0<, result: int(0)
>< ^= >-10<, result: int(-10)
>< ^= >100<, result: int(100)
>< ^= >-34000000000<, result: int(-34000000000)
>< ^= >INF<, result: int(-9223372036854775808)
>< ^= >-INF<, result: int(-9223372036854775808)
>< ^= >NAN<, result: int(-9223372036854775808)
>< ^= >1<, result: int(1)
>< ^= ><, result: int(0)
>< ^= ><, result: int(0)
>< ^= >123<, result: int(123)
>< ^= >2e+5<, result: int(2)
>< ^= ><, result: int(0)
>< ^= >abc<, result: int(0)
>< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>123< ^= >0<, result: int(123)
>123< ^= >-10<, result: int(-115)
>123< ^= >100<, result: int(31)
>123< ^= >-34000000000<, result: int(-33999999877)
>123< ^= >INF<, result: int(-9223372036854775685)
>123< ^= >-INF<, result: int(-9223372036854775685)
>123< ^= >NAN<, result: int(-9223372036854775685)
>123< ^= >1<, result: int(122)
>123< ^= ><, result: int(123)
>123< ^= ><, result: int(123)
>123< ^= >123<, result: string(3) "   "
>123< ^= >2e+5<, result: string(3) "W"
>123< ^= ><, result: string(0) ""
>123< ^= >abc<, result: string(3) "PPP"
>123< ^= >9223372036854775807<, result: int(9223372036854775684)
-------------------------------------
>2e+5< ^= >0<, result: int(2)
>2e+5< ^= >-10<, result: int(-12)
>2e+5< ^= >100<, result: int(102)
>2e+5< ^= >-34000000000<, result: int(-33999999998)
>2e+5< ^= >INF<, result: int(-9223372036854775806)
>2e+5< ^= >-INF<, result: int(-9223372036854775806)
>2e+5< ^= >NAN<, result: int(-9223372036854775806)
>2e+5< ^= >1<, result: int(3)
>2e+5< ^= ><, result: int(2)
>2e+5< ^= ><, result: int(2)
>2e+5< ^= >123<, result: string(3) "W"
>2e+5< ^= >2e+5<, result: string(4) "    "
>2e+5< ^= ><, result: string(0) ""
>2e+5< ^= >abc<, result: string(3) "SH"
>2e+5< ^= >9223372036854775807<, result: int(9223372036854775805)
-------------------------------------
>< ^= >0<, result: int(0)
>< ^= >-10<, result: int(-10)
>< ^= >100<, result: int(100)
>< ^= >-34000000000<, result: int(-34000000000)
>< ^= >INF<, result: int(-9223372036854775808)
>< ^= >-INF<, result: int(-9223372036854775808)
>< ^= >NAN<, result: int(-9223372036854775808)
>< ^= >1<, result: int(1)
>< ^= ><, result: int(0)
>< ^= ><, result: int(0)
>< ^= >123<, result: string(0) ""
>< ^= >2e+5<, result: string(0) ""
>< ^= ><, result: string(0) ""
>< ^= >abc<, result: string(0) ""
>< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>abc< ^= >0<, result: int(0)
>abc< ^= >-10<, result: int(-10)
>abc< ^= >100<, result: int(100)
>abc< ^= >-34000000000<, result: int(-34000000000)
>abc< ^= >INF<, result: int(-9223372036854775808)
>abc< ^= >-INF<, result: int(-9223372036854775808)
>abc< ^= >NAN<, result: int(-9223372036854775808)
>abc< ^= >1<, result: int(1)
>abc< ^= ><, result: int(0)
>abc< ^= ><, result: int(0)
>abc< ^= >123<, result: string(3) "PPP"
>abc< ^= >2e+5<, result: string(3) "SH"
>abc< ^= ><, result: string(0) ""
>abc< ^= >abc<, result: string(3) "   "
>abc< ^= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>9223372036854775807< ^= >0<, result: int(9223372036854775807)
>9223372036854775807< ^= >-10<, result: int(-9223372036854775799)
>9223372036854775807< ^= >100<, result: int(9223372036854775707)
>9223372036854775807< ^= >-34000000000<, result: int(-9223372002854775809)
>9223372036854775807< ^= >INF<, result: int(-1)
>9223372036854775807< ^= >-INF<, result: int(-1)
>9223372036854775807< ^= >NAN<, result: int(-1)
>9223372036854775807< ^= >1<, result: int(9223372036854775806)
>9223372036854775807< ^= ><, result: int(9223372036854775807)
>9223372036854775807< ^= ><, result: int(9223372036854775807)
>9223372036854775807< ^= >123<, result: int(9223372036854775684)
>9223372036854775807< ^= >2e+5<, result: int(9223372036854775805)
>9223372036854775807< ^= ><, result: int(9223372036854775807)
>9223372036854775807< ^= >abc<, result: int(9223372036854775807)
>9223372036854775807< ^= >9223372036854775807<, result: int(0)
-------------------------------------
>0< |= >0<, result: int(0)
>0< |= >-10<, result: int(-10)
>0< |= >100<, result: int(100)
>0< |= >-34000000000<, result: int(-34000000000)
>0< |= >INF<, result: int(-9223372036854775808)
>0< |= >-INF<, result: int(-9223372036854775808)
>0< |= >NAN<, result: int(-9223372036854775808)
>0< |= >1<, result: int(1)
>0< |= ><, result: int(0)
>0< |= ><, result: int(0)
>0< |= >123<, result: int(123)
>0< |= >2e+5<, result: int(2)
>0< |= ><, result: int(0)
>0< |= >abc<, result: int(0)
>0< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-10< |= >0<, result: int(-10)
>-10< |= >-10<, result: int(-10)
>-10< |= >100<, result: int(-10)
>-10< |= >-34000000000<, result: int(-10)
>-10< |= >INF<, result: int(-10)
>-10< |= >-INF<, result: int(-10)
>-10< |= >NAN<, result: int(-10)
>-10< |= >1<, result: int(-9)
>-10< |= ><, result: int(-10)
>-10< |= ><, result: int(-10)
>-10< |= >123<, result: int(-1)
>-10< |= >2e+5<, result: int(-10)
>-10< |= ><, result: int(-10)
>-10< |= >abc<, result: int(-10)
>-10< |= >9223372036854775807<, result: int(-1)
-------------------------------------
>100< |= >0<, result: int(100)
>100< |= >-10<, result: int(-10)
>100< |= >100<, result: int(100)
>100< |= >-34000000000<, result: int(-33999999900)
>100< |= >INF<, result: int(-9223372036854775708)
>100< |= >-INF<, result: int(-9223372036854775708)
>100< |= >NAN<, result: int(-9223372036854775708)
>100< |= >1<, result: int(101)
>100< |= ><, result: int(100)
>100< |= ><, result: int(100)
>100< |= >123<, result: int(127)
>100< |= >2e+5<, result: int(102)
>100< |= ><, result: int(100)
>100< |= >abc<, result: int(100)
>100< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>-34000000000< |= >0<, result: int(-34000000000)
>-34000000000< |= >-10<, result: int(-10)
>-34000000000< |= >100<, result: int(-33999999900)
>-34000000000< |= >-34000000000<, result: int(-34000000000)
>-34000000000< |= >INF<, result: int(-34000000000)
>-34000000000< |= >-INF<, result: int(-34000000000)
>-34000000000< |= >NAN<, result: int(-34000000000)
>-34000000000< |= >1<, result: int(-33999999999)
>-34000000000< |= ><, result: int(-34000000000)
>-34000000000< |= ><, result: int(-34000000000)
>-34000000000< |= >123<, result: int(-33999999877)
>-34000000000< |= >2e+5<, result: int(-33999999998)
>-34000000000< |= ><, result: int(-34000000000)
>-34000000000< |= >abc<, result: int(-34000000000)
>-34000000000< |= >9223372036854775807<, result: int(-1)
-------------------------------------
>INF< |= >0<, result: int(-9223372036854775808)
>INF< |= >-10<, result: int(-10)
>INF< |= >100<, result: int(-9223372036854775708)
>INF< |= >-34000000000<, result: int(-34000000000)
>INF< |= >INF<, result: int(-9223372036854775808)
>INF< |= >-INF<, result: int(-9223372036854775808)
>INF< |= >NAN<, result: int(-9223372036854775808)
>INF< |= >1<, result: int(-9223372036854775807)
>INF< |= ><, result: int(-9223372036854775808)
>INF< |= ><, result: int(-9223372036854775808)
>INF< |= >123<, result: int(-9223372036854775685)
>INF< |= >2e+5<, result: int(-9223372036854775806)
>INF< |= ><, result: int(-9223372036854775808)
>INF< |= >abc<, result: int(-9223372036854775808)
>INF< |= >9223372036854775807<, result: int(-1)
-------------------------------------
>-INF< |= >0<, result: int(-9223372036854775808)
>-INF< |= >-10<, result: int(-10)
>-INF< |= >100<, result: int(-9223372036854775708)
>-INF< |= >-34000000000<, result: int(-34000000000)
>-INF< |= >INF<, result: int(-9223372036854775808)
>-INF< |= >-INF<, result: int(-9223372036854775808)
>-INF< |= >NAN<, result: int(-9223372036854775808)
>-INF< |= >1<, result: int(-9223372036854775807)
>-INF< |= ><, result: int(-9223372036854775808)
>-INF< |= ><, result: int(-9223372036854775808)
>-INF< |= >123<, result: int(-9223372036854775685)
>-INF< |= >2e+5<, result: int(-9223372036854775806)
>-INF< |= ><, result: int(-9223372036854775808)
>-INF< |= >abc<, result: int(-9223372036854775808)
>-INF< |= >9223372036854775807<, result: int(-1)
-------------------------------------
>NAN< |= >0<, result: int(-9223372036854775808)
>NAN< |= >-10<, result: int(-10)
>NAN< |= >100<, result: int(-9223372036854775708)
>NAN< |= >-34000000000<, result: int(-34000000000)
>NAN< |= >INF<, result: int(-9223372036854775808)
>NAN< |= >-INF<, result: int(-9223372036854775808)
>NAN< |= >NAN<, result: int(-9223372036854775808)
>NAN< |= >1<, result: int(-9223372036854775807)
>NAN< |= ><, result: int(-9223372036854775808)
>NAN< |= ><, result: int(-9223372036854775808)
>NAN< |= >123<, result: int(-9223372036854775685)
>NAN< |= >2e+5<, result: int(-9223372036854775806)
>NAN< |= ><, result: int(-9223372036854775808)
>NAN< |= >abc<, result: int(-9223372036854775808)
>NAN< |= >9223372036854775807<, result: int(-1)
-------------------------------------
>1< |= >0<, result: int(1)
>1< |= >-10<, result: int(-9)
>1< |= >100<, result: int(101)
>1< |= >-34000000000<, result: int(-33999999999)
>1< |= >INF<, result: int(-9223372036854775807)
>1< |= >-INF<, result: int(-9223372036854775807)
>1< |= >NAN<, result: int(-9223372036854775807)
>1< |= >1<, result: int(1)
>1< |= ><, result: int(1)
>1< |= ><, result: int(1)
>1< |= >123<, result: int(123)
>1< |= >2e+5<, result: int(3)
>1< |= ><, result: int(1)
>1< |= >abc<, result: int(1)
>1< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< |= >0<, result: int(0)
>< |= >-10<, result: int(-10)
>< |= >100<, result: int(100)
>< |= >-34000000000<, result: int(-34000000000)
>< |= >INF<, result: int(-9223372036854775808)
>< |= >-INF<, result: int(-9223372036854775808)
>< |= >NAN<, result: int(-9223372036854775808)
>< |= >1<, result: int(1)
>< |= ><, result: int(0)
>< |= ><, result: int(0)
>< |= >123<, result: int(123)
>< |= >2e+5<, result: int(2)
>< |= ><, result: int(0)
>< |= >abc<, result: int(0)
>< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< |= >0<, result: int(0)
>< |= >-10<, result: int(-10)
>< |= >100<, result: int(100)
>< |= >-34000000000<, result: int(-34000000000)
>< |= >INF<, result: int(-9223372036854775808)
>< |= >-INF<, result: int(-9223372036854775808)
>< |= >NAN<, result: int(-9223372036854775808)
>< |= >1<, result: int(1)
>< |= ><, result: int(0)
>< |= ><, result: int(0)
>< |= >123<, result: int(123)
>< |= >2e+5<, result: int(2)
>< |= ><, result: int(0)
>< |= >abc<, result: int(0)
>< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>123< |= >0<, result: int(123)
>123< |= >-10<, result: int(-1)
>123< |= >100<, result: int(127)
>123< |= >-34000000000<, result: int(-33999999877)
>123< |= >INF<, result: int(-9223372036854775685)
>123< |= >-INF<, result: int(-9223372036854775685)
>123< |= >NAN<, result: int(-9223372036854775685)
>123< |= >1<, result: int(123)
>123< |= ><, result: int(123)
>123< |= ><, result: int(123)
>123< |= >123<, result: string(3) "123"
>123< |= >2e+5<, result: string(4) "3w;5"
>123< |= ><, result: string(3) "123"
>123< |= >abc<, result: string(3) "qrs"
>123< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>2e+5< |= >0<, result: int(2)
>2e+5< |= >-10<, result: int(-10)
>2e+5< |= >100<, result: int(102)
>2e+5< |= >-34000000000<, result: int(-33999999998)
>2e+5< |= >INF<, result: int(-9223372036854775806)
>2e+5< |= >-INF<, result: int(-9223372036854775806)
>2e+5< |= >NAN<, result: int(-9223372036854775806)
>2e+5< |= >1<, result: int(3)
>2e+5< |= ><, result: int(2)
>2e+5< |= ><, result: int(2)
>2e+5< |= >123<, result: string(4) "3w;5"
>2e+5< |= >2e+5<, result: string(4) "2e+5"
>2e+5< |= ><, result: string(4) "2e+5"
>2e+5< |= >abc<, result: string(4) "sgk5"
>2e+5< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>< |= >0<, result: int(0)
>< |= >-10<, result: int(-10)
>< |= >100<, result: int(100)
>< |= >-34000000000<, result: int(-34000000000)
>< |= >INF<, result: int(-9223372036854775808)
>< |= >-INF<, result: int(-9223372036854775808)
>< |= >NAN<, result: int(-9223372036854775808)
>< |= >1<, result: int(1)
>< |= ><, result: int(0)
>< |= ><, result: int(0)
>< |= >123<, result: string(3) "123"
>< |= >2e+5<, result: string(4) "2e+5"
>< |= ><, result: string(0) ""
>< |= >abc<, result: string(3) "abc"
>< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>abc< |= >0<, result: int(0)
>abc< |= >-10<, result: int(-10)
>abc< |= >100<, result: int(100)
>abc< |= >-34000000000<, result: int(-34000000000)
>abc< |= >INF<, result: int(-9223372036854775808)
>abc< |= >-INF<, result: int(-9223372036854775808)
>abc< |= >NAN<, result: int(-9223372036854775808)
>abc< |= >1<, result: int(1)
>abc< |= ><, result: int(0)
>abc< |= ><, result: int(0)
>abc< |= >123<, result: string(3) "qrs"
>abc< |= >2e+5<, result: string(4) "sgk5"
>abc< |= ><, result: string(3) "abc"
>abc< |= >abc<, result: string(3) "abc"
>abc< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
>9223372036854775807< |= >0<, result: int(9223372036854775807)
>9223372036854775807< |= >-10<, result: int(-1)
>9223372036854775807< |= >100<, result: int(9223372036854775807)
>9223372036854775807< |= >-34000000000<, result: int(-1)
>9223372036854775807< |= >INF<, result: int(-1)
>9223372036854775807< |= >-INF<, result: int(-1)
>9223372036854775807< |= >NAN<, result: int(-1)
>9223372036854775807< |= >1<, result: int(9223372036854775807)
>9223372036854775807< |= ><, result: int(9223372036854775807)
>9223372036854775807< |= ><, result: int(9223372036854775807)
>9223372036854775807< |= >123<, result: int(9223372036854775807)
>9223372036854775807< |= >2e+5<, result: int(9223372036854775807)
>9223372036854775807< |= ><, result: int(9223372036854775807)
>9223372036854775807< |= >abc<, result: int(9223372036854775807)
>9223372036854775807< |= >9223372036854775807<, result: int(9223372036854775807)
-------------------------------------
int(10)
int(30)
int(25)
string(8) "25123.45"
int(250)
int(2)
