<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 18/07/2021
        Program : Accept N numbers from user and display summation of digits of each number.
                Input : N : 6
                        Elements : 8225 665 3 76 953 858
                Output : 17 17 3 13 17 21 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Summation
    function Summation($isize,$arr) 
    {
        $i = 0;
        $Digits = 0;
        $No = 0;
        $sum = 0;

        //Logic To Find Summation
        echo("Printing Summation of Digits of Each Entered Number<br>");
        for($i = 0;$i < $isize;$i++)
        {
            $No = $arr[$i];

            while($No != 0)
            {
                $Digits = $No % 10;
                $sum = $sum + $Digits;
                $No = floor($No / 10);
            }

            //Printing Summations
            printf("%d &nbsp;&nbsp",$sum);
            $sum = 0;
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $isize = 6;
        $arr = array(8225,665,3,76,953,858);

        echo "Jay Ganesh.....<br>";
        
        Summation($isize,$arr);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>