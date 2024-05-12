<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 11/5/2024
        Program : Write a recursive program which accept number from user and return
                largest digit

                Input : 87983
                Output : 9   
    */

    //Function To Find Largest Digits
    function MaxDigit($ino)
    {
        static $imax = 0;
        $Digit = 0;

        $Digit = $ino % 10;
        if($imax < $Digit)
        {
            $imax = $Digit;
        }
        $ino = floor($ino / 10);

        if($ino != 0)
        {
            //Recursive Function Call To Max Function
            MaxDigit($ino);
        }
        
        return $imax;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 8789;
        $iret = 0;

        echo"Jay Ganesh....<br>";
        
        //Call To MaxDigits Function
        $iret = MaxDigit($ino);

        //Printing Larget Digit Found
        printf("Largest Digit Present in Entered Number %d is : %d",$ino,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>