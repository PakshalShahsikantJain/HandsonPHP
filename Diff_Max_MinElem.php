<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 16/07/2023
        Program : Accept N numbers from user and return the difference between largest
                and smallest number.
                Input : N : 6
                        Elements : 85 66 3 66 93 88
                Output : 90 (93 -3) 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Find Difference 
    function Difference($isize,$arr)
    {
        $i = 0;
        $imax = 0;
        $imin = 0;
        $diff = 0;

        //Logic
        $imax = $arr[0];
        $imin = $arr[0];
        for($i = 0;$i < $isize;$i++)
        {
            if($arr[$i] > $imax)
            {
                $imax = $arr[$i];
            }
            else if($arr[$i] < $imin)
            {
                $imin = $arr[$i];
            }
        }
        $diff = $imax - $imin;

        return $diff;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $iret = 0;
        $isize = 6;
        $arr = array(85,66,3,66,93,88);

        echo "Jay Ganesh....<br>";
        
        //Call To Differenc function
        $iret = Difference($isize,$arr);

        //Printing Difference Calculated Between Max and Minimum Elements
        echo "Difference Between Max and Minimum Element is : ",$iret;

    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To main function
    main();
?>