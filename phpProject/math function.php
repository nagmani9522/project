<?php
	  echo abs(42.1245)."<br>";
	  echo acos(0.99)."<br>";
	  echo acosh(1800)."<br>";
	  echo asin(1)."<br>";
	  echo asinh(4)  ."<br>";
	  echo(atan(0.50) . "<br>");
	  echo(atan2(0.50,0.50) . "<br>");
	  echo(atanh(M_PI_4) . "<br>");
	  echo(atanh(1) . "<br>");
	  $hex = "E196"; 
      echo base_convert($hex,16,8)."<br>";
	  echo bindec("0011") . "<br>";
	  echo(ceil(5.1) . "<br>");
      echo(ceil(-5.1) . "<br>");
	  echo(cos(M_PI) . "<br>");
      echo(cos(2*M_PI). "<br>");
	  echo(cosh(0) . "<br>");
      echo(cosh(M_PI) . "<br>");
      echo(cosh(2*M_PI). "<br>");
	  echo decbin("7"). "<br>";
	  echo dechex("30") . "<br>";
	  echo decoct("10") . "<br>";
	  $deg = 180;
     $rad = deg2rad($deg);
     echo "$deg degrees is equal to $rad radians.";
	 echo(exp(4.8). "<br>");
	 echo(expm1(0) . "<br>");
	 echo(floor(0.40) . "<br>");
     echo(floor(5) . "<br>");
     echo(floor(-5.1) . "<br>");
	 $x = 7;
     $y = 2;
$result = fmod($x,$y);
echo $result. "<br>";
// $result equals 1, because 2 * 3 + 1 = 7, 11%2=1
     echo(getrandmax(). "<br>");
	 echo hexdec("1e") . "<br>";
	 echo hypot(3,4) . "<br>";
	 echo sqrt(3*3+4*4). "<br>";
	 echo intdiv(8, 4) . "<br>";
     echo intdiv(5, 2) . "<br>";
	 echo is_finite(2) . "<br>";
     echo is_finite(log(0)) . "<br>";
     echo is_finite(2000). "<br>";
	 echo is_infinite(log(0)) . "<br>";
	 echo is_nan(acos(1.01)). "<br>";
	 echo lcg_value(). "<br>";
	 echo(log(2) . "<br>");
	 echo(log(0). "<br>");
	 echo(log10(2) . "<br>");
	 echo(log1p(1) . "<br>");
     echo(log1p(0). "<br>");
	 echo(max(22,14,68,18,15) . "<br>");
	 echo(min(array(44,16,81,12)). "<br>");
     echo(mt_getrandmax(). "<br>");
     echo(mt_rand() . "<br>");
     echo(mt_rand(10,100). "<br>");// this is not use
	 mt_srand(mktime());
     echo octdec("36") . "<br>";
	 echo(pi(). "<br>");
	 echo(pow(2,4)."<br>");
     echo(pow(2,2.5) . "<br>");
     echo(pow(-2,4.2) . "<br>");
     echo(pow(2,-4.2) . "<br>");
     echo(pow(-2,-3.2)."<br>");
	 echo rad2deg(pi()) . "<br>";
	 echo(rand() . "<br>");
     echo(rand(10,100)."<br>");
	 echo(round(1.5,0,PHP_ROUND_HALF_UP) . "<br>");
     echo(round(-1.5,0,PHP_ROUND_HALF_UP) . "<br>");

     echo(round(1.5,0,PHP_ROUND_HALF_DOWN) . "<br>");
     echo(round(-1.5,0,PHP_ROUND_HALF_DOWN) . "<br>");

     echo(round(1.5,0,PHP_ROUND_HALF_EVEN) . "<br>");
     echo(round(-1.5,0,PHP_ROUND_HALF_EVEN) . "<br>");

     echo(round(1.5,0,PHP_ROUND_HALF_ODD) . "<br>");
     echo(round(-1.5,0,PHP_ROUND_HALF_ODD). "<br>");
	 echo(round(4.96754,2) . "<br>");
	 echo(round(4.96354,2) . "<br>");
	 echo(round(4.96454,2) . "<br>");
	 echo(round(0.50) . "<br>");// value 1
     echo(round(0.49) . "<br>");//value 0
     echo(round(-4.40) . "<br>");// value -4
     echo(round(-4.60). "<br>");//value -5
	 echo(sin(0) . "<br>");
     echo(sin(M_PI) . "<br>");
     echo(sin(M_PI_2)."<br>");
	 echo(sinh(-3) . "<br>");
     echo(sinh(0) . "<br>");
     echo(sinh(M_PI) . "<br>");
     echo(sinh(M_PI_2). "<br>");
	 echo(sqrt(0.64) . "<br>");
     echo(sqrt(-9). "<br>");
	 srand(mktime());
     echo(rand()."<br>");
	 echo(tan(M_PI_4) . "<br>");
     echo(tan(0.50) . "<br>");
	 echo(tanh(M_PI_4) . "<br>");
     echo(tanh(0.50) . "<br>");  
?>	                    