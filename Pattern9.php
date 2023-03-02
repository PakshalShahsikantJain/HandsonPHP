<?php
    /*
        Author : Pakshal Jain
        Date : 19/02/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 4 iCol = 3
        Output :    1 2 3
                    1 2 3
                    1 2 3
                    1 2 3 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Given Patter
    function Pattern($No,$No2)
    {
        $i = 0;
        $j = 0;
        
        //Logic To Print Given Pattern
        echo "Printing Given Pattern : <br>";
        for($i = 1;$i <= $No;$i++)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                echo $j,"\t";
            }
            echo "<br>";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 4;
        $No2 = 3;

        echo "Jay Ganesh...<br>";

        //Call To Pattern Function
        Pattern($No,$No2);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To main Function
    main();
?>