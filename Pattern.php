<?php
    /*
        Author : Pakshal Jain
        Date : 27/10/2022
        Program : To Accept Number From User and Print That Number of $ and * on Screen
    */

    //Function To Print Pattern
    function Pattern($No) 
    {
        $i = 0;

        //Logic
        for($i = 0;$i < $No;$i++)
        {
            echo "$ * ";
        }
    }

    //Main Function
    function main() 
    {
        $No = 5;

        echo "Jay Ganesh...<br>";
        
        //Call To Pattern Function
        Pattern($No);
    }

    //Call To Main Function
    main();
?>