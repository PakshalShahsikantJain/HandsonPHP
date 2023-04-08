<?php 
    /*
    Author : Pakshal Shashikant Jain 
    Date : 08/04/2023
    Program : To Print Below Given Pattern 
    Input : iRow = 5 iCol = 5
    Output : * * * * *
             * *     *
             *   *   *
             *     * *
             * * * * *
    */

    //Function Pattern 
    function Pattern($No,$No2)
    {
        $i = 0;
        $j = 0;

        //Logic To Print Pattern
        echo "Printing Below Given Pattern : <br>";
        for($i = 1;$i <= $No;$i++)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                if(($i == $j)||($i == 1)||($j == 1)||($i == $No)||($j == $No2))
                {
                    echo "*&nbsp;&nbsp;&nbsp;";
                }
                else 
                {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    }

    //Main Function
    function main() 
    {
        $No = 5;
        $No2 = 5;

        echo "Jay Ganesh...<br>";
        
        //Call To pattern Function
        Pattern($No,$No2);
    }

    //Call To Main Function
    main();
?>