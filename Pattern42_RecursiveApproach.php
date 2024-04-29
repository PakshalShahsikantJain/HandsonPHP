<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 28/04/2024
        Program : Write a recursive program which display below pattern.
                  Output : * * * * *
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Given Pattern
    function Display($ino) 
    {
        if($ino == 0)
        {
            return;
        }
        else 
        {
            echo "* &nbsp;&nbsp;";
            $ino--;
            
            //Recursive Function Call
            Display($ino);
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $ino = 10;

        echo "Jay Ganesh....<br>";
        
        echo "Output : <br>";
        
        //Call To Display Function
        Display($ino);
    }

    //Call To Main Function
    main();
?>