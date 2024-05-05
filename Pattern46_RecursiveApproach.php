<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 5/5/2024
        Program : Write a recursive program which accept number from user and display below
                pattern.

                Input : 5
                Output : 5 * 4 * 3 * 2 * 1 * 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Given Pattern 
    function Display($ino)
    {
        if($ino < 1)
        {
            return;
        }
        else 
        {
            printf("%d &nbsp &nbsp * &nbsp &nbsp",$ino);
            $ino--;
            
            //Recursive Function To Display Function
            Display($ino);
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main()
    {
        $ino = 5;

        echo "Jay Ganesh...<br>";
        
        echo "Output : ";

        //Call To Display Function
        Display($ino);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To main Function
    main();
?>