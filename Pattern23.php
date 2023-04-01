<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 26/03/2023
    Program : To Print Below Given Pattern 
    
    Input : iRow = 4 iCol = 4
    Output : * * * *
             * * * #
             * * # #
             * # # # 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Pattern
    function Display($No,$No2) 
    {
        $i = 0;
        $j = 0;

        //Logic To Print Pattern
        echo "Printing Below Given Pattern <br>";
        for($i = 1;$i <= $No;$i++)
        {
            for($j = $No2;$j > 0;$j--)
            {
                if(($i == $j)||($i < $j))
                {
                    echo "* &nbsp;&nbsp;&nbsp";
                }
                else 
                {
                    echo "# &nbsp;&nbsp;&nbsp";
                }
            }
            echo("<br>");
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh...<br>";

        //Call To Display Function
        Display($No,$No2);
    }

    //Call To Main Function 
    main();
?>