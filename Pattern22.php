<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 22/03/2023
    Program  : To Print Below Given Pattern 
    
    Input : iRow = 4 iCol = 4
    Output : * # # #
             * * # #
             * * * #
             * * * * 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern
    function Pattern($No,$No2)
    {
        $i = 0;
        $j = 0;

        //Logic To print Pattern
        echo "Printing Below Given Pattern : <br>";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 0;$j < $No2;$j++)
            {
                if(($i == $j)||($i > $j))
                {
                    echo "*","&nbsp;&nbsp;&nbsp";
                }
                else 
                {
                    echo "#","&nbsp;&nbsp;&nbsp";
                }
            }
            echo "<br>";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh....<br>";

        //Call To pattern Function
        Pattern($No,$No2);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>