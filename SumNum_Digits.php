<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 5/5/2024
        Program : Write a recursive program which accept number from user and return
                    summation of its digits.
                    Input : 879
                    Output : 24 
    */

    //Function To Calculate Summation of Digits of Entered Number 
    function SumDigits($ino)
    {
        //Required Variables
        static $isum = 0;
        $Digits = 0;

        $Digits = $ino % 10;
        $isum = $isum + $Digits;
        $ino = floor($ino / 10);

        if($ino != 0)
        {
            SumDigits($ino);
        }

        return $isum;
    }

    //Main Function
    function main()
    {
        $ino = 879;
        $iret = 0;

        echo "Jay Ganesh.....<br>";

        //Call To SumDigits Function
        $iret = SumDigits($ino);

        //Printing Summation Calculated
        echo "Summation of Digits of Entered Number is : ",$iret;
    }

    //Call To Main Function
    main();
?>