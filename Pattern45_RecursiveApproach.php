<?php
    /*
        Author: Pakshal Shashikant Jain
        Date: 04/05/2024
        Program: Write a recursive program which display below pattern.
                 Output : A B C D E F 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Given Pattern
    function Display($ino,$ch)
    {
        $ascii = 0;

        if($ino < 1)
        {
            return;
        }
        else 
        {
            echo $ch,"&nbsp &nbsp &nbsp";
            $ascii = ord($ch) + 1;
            $ch = chr($ascii);
            $ino--;
            Display($ino,$ch);
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 6;
        $ch = 'A';

        echo "Jay Ganesh...<br>";
        
        echo "Output : <br>";
        
        //Call To Display Function
        Display($ino,$ch);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Display Function
    main();
?>