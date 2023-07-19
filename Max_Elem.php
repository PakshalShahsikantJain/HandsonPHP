<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 16/07/2023
    Program : Accept N numbers from user and return the largest number.
              Input : N : 6
                      Elements : 85 66 3 66 93 88
              Output : 93 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Find Maximum Number
    function Maximum($isize,$arr) {
        $i = 0;
        $imax = 0;

        if($isize < 0)  
        {
            $isize = -$isize;
        }

        //Logic
        $imax = $arr[0];
        for($i = 0;$i < $isize;$i++)
        {
            if($arr[$i] > $imax)
            {
                $imax = $arr[$i];
            }
        }

        return $imax;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Funcition
    function main() 
    {
        $isize = -6;
        $arr = array(85,66,3,66,93,88);
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        //Call To iret Function
        $iret = Maximum($isize,$arr);
        echo "Maximum Number from Entered N Elements is : <br>",$iret;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>