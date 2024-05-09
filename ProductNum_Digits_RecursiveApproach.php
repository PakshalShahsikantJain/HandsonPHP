<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 9/5/2024
        Program : Write a recursive program which accept number from user and return its
                product of digits.

                Input : 523
                Output : 30 
    */

    //Function To Calculate Products of Digits of Entered Number 
    function Mult($ino)
    {
        //Required Variables
        static $imult = 1;
        $Digits = 0;

        $Digits = $ino % 10;
        $imult = $imult * $Digits;
        $ino = floor($ino / 10);

        if($ino != 0)
        {
            Mult($ino);
        }

        return $imult;
    }

    //Main Function
    function main()
    {
        $ino = 523;
        $iret = 0;

        echo "Jay Ganesh.....<br>";

        //Call To Mult Function
        $iret = Mult($ino);

        //Printing Products Calculated
        echo "Products of Digits of Entered Number is : ",$iret;
    }

    //Call To Main Function
    main();
?>