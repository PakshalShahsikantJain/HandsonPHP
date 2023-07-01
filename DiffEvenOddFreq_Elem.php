<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 27/06/2023
    Program : Accept N numbers from user and return difference between frequency of
              even number and odd numbers.
              Input : N : 7
                      Elements : 85 66 3 80 93 88 90

              Output : 1 (4 -3)

    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Difference
    function Difference($isize,$arr)
    {
        $i = 0;
        $icntEven = 0;
        $icntOdd = 0;
        $diff = 0;

        //logic 
        for($i = 0;$i < $isize;$i++)
        {
            if(($arr[$i] % 2) == 0)
            {
                $icntEven = $icntEven + 1;        
            }
            else 
            {
                $icntOdd = $icntOdd + 1;
            }
        }

        $diff = $icntEven - $icntOdd;

        return $diff;
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $isize = 7;
        $arr = array(85,66,3,80,93,88,90);
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Call To Difference Function
        $iret = Difference($isize,$arr);

        //Printing Differnce Calculated
        echo "Difference Between Ferquency of Even and odd Elements is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>