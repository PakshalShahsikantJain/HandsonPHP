<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 13/5/2024
        Program : Write a recursive program which accept number from user and return
                  Largest digit

                  Input : 87983
                  Output : 9  
    */

    //Function To Find Largest Digits
    function MaxDigit($ino)
    {
        static $iMax = 0;
        $Digit = 0;


        $Digit = $ino % 10;
        if($iMax < $Digit)
        {
            $iMax = $Digit;
        }
        $ino = floor($ino / 10);

        if($ino != 0)
        {
            //Recursive Function Call To Max Function
            MaxDigit($ino);
        }
        
        return $iMax;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $ino = 8289;
        $iret = 0;

        echo"Jay Ganesh....<br>";
        
        //Call To MaxDigits Function
        $iret = MaxDigit($ino);

        //Printing Largest Digit Found
        printf("Largest Digit Present in Entered Number %d is : %d",$ino,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>