<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 30/04/2024
        Program : Write a recursive program which display below pattern.
                Output : 5 4 3 2 1
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Given Pattern
    function Display($ino)
    {
        if($ino < 1)
        {
            return;
        }
        else 
        {
            printf("%d &nbsp;&nbsp;&nbsp",$ino);
            $ino--;

            //Recursive Function Call
            Display($ino);
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 5;

        echo "Jay Ganesh....<br>";
        
        echo "Output : ";
        
        //Call To Display function
        Display($ino);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    main();
?>