<?php

    /*
        Author : Pakshal Shashikant Jain 
        Date : 02/03/2023
        Program : To Print Below Given Patter
        Input : iRow = 3 iCol = 4
        Output : * # * #
                 * # * #
                 * # * # 

    */

    //////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Given Pattern
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;

        echo"Printing Given Pattern<br>";

        //Logic To Print Pattern
        for($i = 1;$i <= $No;$i++)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                if($j % 2 != 0)
                {
                    echo "*\t";
                }
                else
                {
                    echo "#\t";
                }
            }
            echo"<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main()
    {
        $No = 3;
        $No2 = 4;

        echo "Jay Ganesh...<br>";

        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //Call TO Main Function
    main();
?>