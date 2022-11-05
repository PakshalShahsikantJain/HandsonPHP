<?php
    /*
        Author : Pakshal Jain
        Date : 29/10/2022
        Program : To Convert Entered Temparature From Fahrenheit To Celcius
    */

    /////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Convert Function
    function Convert($No)
    {
        $ans = 0.0;

        $ans = ($No - 32) * 5 / 9;

        return $ans;
    }

    /////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    function main() 
    {
        $No = 10;
        $fret = 0.0;

        echo "Jay Ganesh...";
        
        //Call To Convert Function
        $fret = Convert($No);

        echo "Converted Temparature is : ",$fret;
    }

    ////////////////////////////////////////////////////////////////////////////////
    //Call To Main Function
    main();
?>