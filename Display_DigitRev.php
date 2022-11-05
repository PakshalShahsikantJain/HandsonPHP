<?php
    /*  
        Author : Pakshal Jain
        Date : 15/10/2022
        Program : To Display Digits of Entered Number in Reverse Order
    */

    //Function To Display Digits in Reverse Order
    function Display($No) 
    {
        $Digit = 0;
        
        print("Printing Digits in Reverse Order : <br>");
        //Logic To Print Digits in Reverse Order
        while($No != 0)
        {
            $Digit = $No % 10;
            echo $Digit,"<br>";
            $No = floor($No / 10);
        }
    }

    //Main Function
    function main() 
    {
        $No = 78979;

        echo "Jay Ganesh...<br>";
        //Call To Dispaly Function
        Display($No);
    }

    //Call To Main Function
    main();
?>