<?php
function existAllElements(array $basket, array $userBasket)
{
	foreach($basket as $value1)
	{
		foreach ($userBasket as $value2)
		{
			if ((int)$value1 !== (int)$value2)
			{
				return "No!";
			}
		}
	}
	return "Yes!";
}
	
function existSingleElement(array $basket, array $userBasket)
{
	$count = 0;
	foreach($basket as $value1)
	{
		foreach ($userBasket as $value2)
		{
			if ((int)$value1 === (int)$value2)
			{
				$count++;
				if ($count>1)
				{
					return "No!";
				}
			}
		}
	}
	if ($count === 0)
		return "No!";
	return "Yes!";
}

?>