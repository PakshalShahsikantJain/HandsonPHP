<?php
    /*
        Author : Pakshal Jain
        Date : 24/09/2022
        Program : To Display Factors of Entered Number
    */

    //Function To Display Even Factors
    function Display($No) 
    {
            $i = 0;
        
        if($No < 0)
        {
            $No = -$No;
        }

        echo "Printing Factors of Entered Number<br>";
        
        for($i = 1;$i <= $No;$i++)
        {
            if($No % $i == 0)
            {
                echo $i," ";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        echo "Jay Ganesh....<br>";
        $No = -45;
        //Call To Display Function
        Display($No);
    }
    //Call TO main Function
    main();
?>