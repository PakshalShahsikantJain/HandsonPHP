<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 08/05/2024
        Program : Write a recursive program which accept number from user and return its
                factorial.
                
                Input : 5
                Output : 120 
    */

    //Function To Find Factorial of Entered Number 
    function Fact($ino)
    {
        //Required Variables
        static $imult = 1;

        if($ino != 0)
        {
            $imult = $imult * $ino;
            $ino--;
            Fact($ino);
        }

        return $imult;
    }

    //Main Function
    function main()
    {
        $ino = 5;
        $iret = 0;

        echo "Jay Ganesh.....<br>";

        //Call To Fact Function
        $iret = Fact($ino);

        //Printing Factorial Calculated
        echo "Factorial of Entered Number is : ",$iret;
    }

    //Call To Main Function
    main();
?>