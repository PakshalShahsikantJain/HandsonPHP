<?php
    /*
        Author : Pakshal Jain
        Date : 27/10/2022
        Program : To Accept Number From User and NumberLine of That Number
    */

    //////////////////////////////////////////////////////////////////////////////////

    //Function To Print Number Line
    function NumberLine($No)
    {
        $i = 0;

        //Logic
        echo("Printing NumberLine of Entered Number\n");
        for($i = -$No;$i <= $No;$i++)
        {
            echo($i,"\t");
        }
    }

    //////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 5;

        echo "Jay Ganesh...";
        
        //Call To NumberLine Function
        NumberLine($No);
    }

    //Call To Main Function
    main();
?>