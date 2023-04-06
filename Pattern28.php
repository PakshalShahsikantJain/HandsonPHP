<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 06/04/2023
    Program : To print Below Given Pattern

    Input : iRow = 4 iCol = 4
    Output : * * * *
             * * *
             * *
             *
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Given Pattern 
    function Display($No,$No2)
    {
        $i = 0;
        $j = 0; 

        //Logic To Print Given Pattern 
        echo "Printing Below Given Pattern : <br>";
        for($i = $No;$i > 0;$i--)
        {
            for($j = 1;$j <= $No2;$j++)
            {
                if($i >= $j)
                {
                    echo "*&nbsp;&nbsp;";
                }
                else
                {
                    echo " &nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh...<br>";
        
        //Call To Display Function
        Display($No,$No2);
    }

    /////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>