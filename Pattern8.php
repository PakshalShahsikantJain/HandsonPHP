<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 19/02/2023
        Program : To Print Below Given Patter
        Input : iRow = 4 iCol = 3
        Output : * * *
                 * * *
                 * * *
                 * * *  
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern 
    function Pattern($Row,$Col)
    {
        $i = 0;
        $j = 0;
        
        //Logic To Print 
        for($i = 1;$i <= $Row;$i++)
        {
            for($j = 1;$j <= $Col;$j++)
            {
                echo "*"," ";
            }
            echo"<br>";
        }

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 4;
        $No2 = 3;

        echo "Ganapati Bappa Morya..<br>";
        
        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //Call To Main Function
    main();
?>