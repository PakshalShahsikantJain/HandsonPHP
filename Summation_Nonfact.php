<?php
    /*
        Author : Pakshal Jain
        Date : 05/10/2022
        Program : To Calculate Summation of NonFactors of Entered Number
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calulate Summation
    function Summation($No)
    {
        $i = 0;
        $sum = 0;

        for($i = 1;$i < $No;$i++)
        {
            if($No % $i != 0)
            {
                $sum = $sum + $i;
            }
        }

        return $sum;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $no = 10;
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Call To Summation Function
        $iret = Summation($no);

        echo "Summation of Nonfactors of Entered Number is : ",$iret;
    }

    //Call To Main Function
    main();
?>