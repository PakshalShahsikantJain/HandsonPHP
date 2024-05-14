<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 14/5/2024
        Program : Write a recursive program which accept number from user and return
                  smallest digit

                  Input : 87983
                  Output : 3  
    */

    //Function To Find Smallest Digits
    function MinDigit($ino)
    {
        static $imin = 0;
        $Digit = 0;

        if($imin == 0)
        {
            $imin = $ino % 10;
            $ino = floor($ino / 10);
        }

        $Digit = $ino % 10;
        if($Digit == 0)
        {
            $imin = 0;
            return $imin;
        }
        else if($Digit < $imin)
        {
            $imin = $Digit;
        }
        $ino = floor($ino / 10);

        if($ino != 0)
        {
            //Recursive Function Call To Min Function
            MinDigit($ino);
        }
        
        return $imin;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 8289;
        $iret = 0;

        echo"Jay Ganesh....<br>";
        
        //Call To MinDigits Function
        $iret = MinDigit($ino);

        //Printing Larget Digit Found
        printf("Smallest Digit Present in Entered Number %d is : %d",$ino,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>