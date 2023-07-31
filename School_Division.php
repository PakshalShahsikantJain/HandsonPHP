<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 30/07/2023
    Program : Accept division of student from user and depends on the division
              display exam timing. There are 4 divisions in school as A,B,C,D. Exam
              of division A at 7 AM, B at 8.30 AM, C at 9.20 AM and D at 10.30 AM.
              (Application should be case insensitive)
            
              Input : C
              Output : Your exam at 9.20 AM
            
              Input : d
              Output : Your exam at 10.30 AM
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Exam Timing 
    function School($ch)
    {
        $ascii = 0;

        if(($ch >= 'a')&&($ch <= 'z'))
        {
            $ascii = ord($ch) - 32;
            $ch = chr($ascii);
        }

        //Logic To Display Exam
        switch($ch) 
        {
            case 'A' : 
            {
                echo "Your Exam is at 7 AM";
                break;
            }
            case 'B' :
            {
                echo "Your Exam is at 8:30 AM";
                break;
            }
            case 'C' :
            {
                echo "Your Exam is at 9:20 AM";
                break;
            }
            case 'D' :
            {
                echo "Your Exam is at 10:30 AM";
                break;
            }
            default :
            {
                echo "Invalid Division";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $ch = 'd';

        echo "Jay Ganesh.....<br>";
        
        //Call to School function
        School($ch);    
    }

    //Call To Main function
    main();
?>