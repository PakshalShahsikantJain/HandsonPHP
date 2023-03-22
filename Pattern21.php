<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 22/03/2023
    Program : To Print Below Given Pattern
    Input : iRow = 5 iCol = 5
    Output : 1  2  3  4  5
            -1 -2 -3 -4 -5
             1  2  3  4  5
            -1 -2 -3 -4 -5
             1  2  3  4  5
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;

        //Logic To Print Pattern 
        echo "Printing Below Given Pattern :<br>";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                if($i % 2 == 0)
                {
                    echo "&nbsp;&nbsp;",$j,"&nbsp;";
                }
                else if($i % 2 != 0)
                {
                    echo (-$j),"&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $No = 5;
        $No2 = 5;

        echo "Jay Ganesh....<br>";
        
        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //Call To main Function
    main(); 
?>