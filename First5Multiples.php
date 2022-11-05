<?php
    /*
        Author : Pakshal Jain
        Date : 28/10/2022
        Program : To Calcualte First Five Multiples of Entered number
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate First Five Multiples of Entred Number
    function Display($No)
    {
        $i = 0;
        $Mult = 0;

        //Logic
        echo "Printing First Five Multiples of Entered Number<br>";
        for($i = 1;$i <= 5;$i++)
        {
            $Mult = $No * $i;
            echo $Mult,"\t";
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 8;

        echo "Jay Ganesh...<br>";

        //Call To Display Function

        Display($No);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>