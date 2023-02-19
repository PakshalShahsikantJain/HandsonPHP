<?php
    /*
        Author : Pakshal Jain 
        Date : 16/02/2023
        Program : To Print Given Below Pattern 

        Input : 5
        Output : 1 * 2 * 3 * 4 * 5 *
    */

    ////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Print Pattern 
    function Pattern($No) 
    {
        $i = 0;
        
        echo "Printing Given Pattern : <br>";
        
        //Logic To Print Pattern
        for($i = 1;$i <= $No;$i++)
        {
            echo $i,"\t","*","\t";
        }
    }

    /////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5;

        echo "Jay Ganesh...<br>";
        
        Pattern($No);
    }

    //Call To Main Function
    main();
?>