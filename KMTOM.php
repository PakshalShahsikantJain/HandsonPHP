<?php
    /*
        Author : Pakshal Jain
        Date : 29/10/2022
        Program : To Convert Entered Km into M
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Convert
    function Convert($No)
    {
        $ans = 0;

        $ans = $No * 1000;
        
        return $ans;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5;
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Call To Convert Function
        $iret = Convert($No);

        echo "Converted Km into M is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>