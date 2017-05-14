<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div>
<?php
include "Basket.php";
include "Comparator.php";

$taskB="";
$taskC="";
$userBasket = new Basket();
$userBasket->fillBasket(100);
$userBasket->printBasket("User basket");
print "<br>";
for ($i=1; $i<31;$i++)
{
	$basket = new Basket();
	$basket->fillBasket(rand(1, 9));
	$basket->printBasket("Basket $i");
	
	if (existAllElements($basket->balls, $userBasket->balls)===1)
	{$taskB.="#$i ";}
	//print existAllElements($basket->balls, $userBasket->balls);
	if (existSingleElement($basket->balls, $userBasket->balls)===1)
	{$taskC.="#$i ";}
	//print existSingleElement($basket->balls, $userBasket->balls);
}

print "<br><br>Contained in User's basket: $taskB";
print "<br>Have only one element from User basket: $taskC";
?>
</div>
</form>
</body>
</html>