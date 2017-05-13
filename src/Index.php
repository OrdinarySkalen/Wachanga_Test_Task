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

$userBasket = new Basket();
$userBasket->fillBasket(200);
$userBasket->printBasket("User basket");

for ($i=1; $i<31;$i++)
{
	$basket = new Basket();
	$basket->fillBasket(rand(1, 9));
	$basket->printBasket("Basket $i");
	
	print existAllElements($basket->balls, $userBasket->balls);
	
	print existSingleElement($basket->balls, $userBasket->balls);
}
?>
</div>
</form>
</body>
</html>