<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 29/04/2024
        Program : Write a recursive program which display below pattern.
                  Output : 1 2 3 4 5
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Given pattern 
    function Display($ino)
    {
        static $i = 1;

        if($i > $ino)
        {
            return;
        }
        else 
        {
            printf("%d &nbsp;&nbsp;&nbsp",$i);
            $i++;
            
            //Recursive Function Call
            Display($ino);
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 5;
        echo "Jay Ganesh......<br>";

        echo "Output : <br>";
        
        //Call To Display Function
        Display($ino);
    }

    //Call To main Function
    main();
?>