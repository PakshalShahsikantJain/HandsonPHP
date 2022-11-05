<?php
    /*
        Author : Pakshal Jain
        Date : 28/10/2022
        Program : To accept Radius of Circle From User and Calculate Area of Circle
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Area of Circle
    function Calculate($No)
    {
        $area = 0;

        $area = 3.14 * $No * $No;

        return $area;
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5.3;
        $fret = 0.0;

        echo "Jay Ganesh...<br>";
    
        //Call To Calculate Function
        $fret = Calculate($No);

        echo "Area of Circle is : ",$fret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>