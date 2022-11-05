<?php
    /*
        Author : Pakshal Jain
        Date : 20/10/2022
        Program : To Calculate Difference Between Summation of Even and Odd Digits of Entered Number 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Difference
    function Difference($No)
    {
        $Diff = 0;
        $Sum = 0;
        $Sum2 = 0;
        $Digits = 0;

        //Logic
        while($No != 0)
        {
            $Digits = $No % 10;
            if($Digits % 2 == 0)
            {
                $Sum = $Sum + $Digits;
            }
            else if($Digits % 2 != 0)
            {
                $Sum2 = $Sum2 + $Digits;
            }
            $No = floor($No / 10);
        }

        $Diff = $Sum - $Sum2;

        return $Diff;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 8440;
        
        $iret = 0;

        echo "Jay Ganesh...";
        
        //Call To iret Function
        $iret = Difference($No);

        //Printing Difference Calculated
        echo "Difference Between Summation of Even and Odd Digits is : ",$iret;
    }

    //Call To Main Function
    main();
?>