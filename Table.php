<?php
    /*
        Author : Pakshal Jain
        Date : 24/10/2022
        Program : To Display Table of Entered Number
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Table
    function Table($No,$No2)
    {
        $i = 0;
        $table = 0;

        for($i = 1;$i <= $No2;$i++)
        {
            $table = $No * $i;
            echo $table," ";
        }
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 2;
        $No2 = 10;

        echo "Jay Ganesh...<br>";
        
        //Call To Table Function
        Table($No,$No2);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    main();
?>