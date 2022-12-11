<?php
    /*
        Author : Pakshal Jain
        Date : 11/12/2022
        Program : To Calculate Summation of Even Numbers in Entered Range
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Summation of Even Numbers
    function SumEven($No,$No2)
    {
        $i = 0;
        $Sum = 0;

        //Logic To Calculate Summation of Even Numbers
        for($i = $No;$i <= $No2;$i++)
        {
            if($i % 2 == 0)
            {
                $Sum = $Sum + $i;
            }
        }

        return $Sum;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5;
        $No2 = 10;
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        if(($No < 0)||($No > $No2))
        {
            echo "Invalid Range<br>";

            return;
        }

        //Call To SumEven Function
        $iret = SumEven($No,$No2);

        //Printing obtained Output
        echo "Summation of Even Number in Entered Range is : ",$iret;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>