<?php
    /*
        Author : Pakshal Jain
        Date : 17/09/2022
        Program : To Print * Entered Number of Times using While Loop
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function Display($No)
    {
        while($No > 0)
        {
            echo "*\t";
            $No--;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        echo "Ganapati Bappa Morya...<br>";
        $No = 5;

        //Call To Function
        Display($No);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    main();
?>