<?php
    /*
        Author : Pakshal Jain
        Date : 20/09/2022
        Program : To Display Even Factors of Entered Number
    */

    //Function To Display Even Factors
    function Display($No) 
    {
        $i = 0;

        echo "Printing Even Factors of Entered Number<br>";
        for($i = 1;$i <= $No;$i++)
        {
            if(($No % $i == 0)&&($i % 2 == 0))
            {
                echo $i," ";
            }
        }
    }
    function main() 
    {
        echo "Jay Ganesh....<br>";
        $No = 24;
        //Call To Dispaly Function
        Display($No);
    }
    //Call TO main Function
    main();
?>