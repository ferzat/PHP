<?php
for ($i = 1; $i<=1000; $i++)
{
	$l = $i;
	$fizz = "";
	$buzz = "";
	$woof = "";
	while($l>0):
		$fizz .= ($l%10 == 3)? "Fizz":"";
		$buzz .= ($l%10 == 5)? "Buzz":"";
		$woof .= ($l%10 == 7)? "Woof":"";  
		$l/=10;
	endwhile;
	echo ($i%3)?(($i%5)? (($i%7)?(($fizz==""&&$buzz==""&&$woof=="")?$i:$fizz.$buzz.$woof): $fizz.$buzz.$woof."Woof") : (($i%7)?$fizz.$buzz."Buzz".$woof:$fizz.$buzz."Buzz".$woof."Woof")):(($i%5)? ($i%7)?($fizz."Fizz".$buzz.$woof):$fizz."Fizz".$buzz.$woof."Woof": (($i%7)?$fizz.$buzz."Buzz".$woof : $fizz."Fizz".$buzz."Buzz".$woof."Woof")),"\n";
}
?>
