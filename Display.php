<?php
    /*
        Author : Pakshal Jain
        Date : 10/09/2022
        Program : To Display Entered Number of Times
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function Display($No) 
    {
        echo("Printing Marvellous Entered Number of Times<br>");
        for($i = 0;$i < $No;$i++)
        {
            echo("Marvellous<br>");
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function main()
    {   
        $no = 5;
        echo("Jay Ganesh....<br>");

        Display($no);
    }

    main();
?>