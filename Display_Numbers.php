<?php
    /*
        Author : Pakshal Jain
        Date : 11/09/2022
        Program : To Display Numbers From Entered Number Till 1
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function Display($No) 
    {
        echo "Printing Numbers from ",$No," Till 1 <br>";
        for($i = $No;$i > 0;$i--)
        {
            echo $i," ";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function main()
    {   
        $no = 10;
        echo("Jay Ganesh....<br>");

        Display($no);
    }

    main();
?>