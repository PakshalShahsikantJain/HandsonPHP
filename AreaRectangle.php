<?php
    /*
        Author : Pakshal Jain
        Date : 28/10/2022
        Program : To Accept Radius and Height From User and Calculate Area of Rectangle
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Area of Rectangle
    function Area($Height,$Width)
    {
        $Area = 0.0;

        //Logic
        $area = $Height * $Width;

        return $area;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $Height = 5.3;
        $Width = 9.78;
        $fret = 0.0;

        echo "Jay Ganesh...<br>";
        
        //Call To Function Area
        $fret = Area($Height,$Width);
        
        //Printing Area of Rectangle
        echo "Area of Rectangle is : ",$fret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>
