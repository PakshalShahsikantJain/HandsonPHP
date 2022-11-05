<?php
	/*
		Author : Pakshal Jain
		Date : 06/10/2022
		Program : To Find Difference Between Summation of Factors and Nonfactors of Entered Number
	*/

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//Function To Find Difference
	function Diff($No)
	{
		$i = 0;
		$sum = 0;
		$sum2 = 0;
		$diff = 0;

		for($i = 1;$i < $No;$i++)
		{
			if($No % $i == 0)
			{
				$sum = $sum + $i;
			}
			else if($No % $i != 0)
			{
				$sum2 = $sum2 + $i;
			}
		}

		$diff = $sum - $sum2;

		return $diff;
	}
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function main() 
	{
		$No = 12;
		$iret = 0;

		echo "Jay Ganesh...<br>";

		//Call To Diff Function
		$iret = Diff($No);

		echo "Difference Between Summation of Factors and Nonfactors is : ",$iret;
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	//Call To main Function
	main();
?>