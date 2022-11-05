<?php
    /*
        Author : Pakshal Jain
        Date : 25/10/2022
        Program : To Display Table of Entered Number in Reverse order
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Table 
    function Table($No,$No2)
    {
        $table = 0;
        $i = 0;

        echo"Displaying Table of Entered Number in Reverse order<br>";
        for($i = $No2;$i > 0;$i--)
        {
            $table = $No * $i;
            echo $table," ";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 2;
        $No2 = 10;

        echo "Jay Ganesh...";
        
        //Call To Table Function
        Table($No,$No2);
    }

    //Call To Main Function
    main();
?>