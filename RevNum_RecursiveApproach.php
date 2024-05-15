<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 14/5/2024
        Program :  Write a recursive program which accept number from user and return its
                reverse number.

                Input : 523
                Output : 325  
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Reverse Entered Number
    function Reverse($ino) 
    {
        static $rno = 0;

        $Digit = 0;

        //Logic 
        if($ino != 0)
        {
            $Digit = $ino % 10;
            $rno = ($rno * 10) + $Digit;
            $ino = floor($ino / 10);

            Reverse($ino);
        }

        return $rno;
    }

    /////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 8765;
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        //Call To Reverse Function
        $iret = Reverse($ino);

        //Printing Reversed Number
        printf("Reversed Number of Number %d is : %d",$ino,$iret);
    }

    //Call To Main Function
    main();
?>