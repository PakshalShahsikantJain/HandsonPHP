<?php
    /*
        Author : Pakshal Jain
        Date : 30/10/2022
        Program : To Converted Entered SqFt To SqM
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Convert SqFt
    function Convert($No)
    {
        $ans = 0;

        $ans = $No * 0.0929;
        
        return $ans;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $No = 9;
        $fret = 0.0;

        echo "Jay Ganesh...";

        //Call To Convert Function
        $fret = Convert($No);

        echo "Converted SqFt To SqM is :",$fret;
    }

    //Call To Main Function
    main()
?>