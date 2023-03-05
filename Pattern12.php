<?php
    /*
        Author : Pakshal Jain 
        Date : 04/03/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 3 iCol = 4
        Output : 1 1 1 1
                 2 2 2 2
                 3 3 3 3
                 4 4 4 4 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern 
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;

        //Logic To Print Pattern
        for($i = 1;$i <= $No;$i++)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                echo $i,"\t";
            }
            echo "<br>";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh...<br>";
        
        //Call To Pattern Function
        Pattern($No,$No2);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>