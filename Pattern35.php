<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 13/04/2023
        Program : To Print Below Given Pattern 
    
        Input : iRow = 6 iCol = 6
        Output : * * * * * *
                 * # # # * *
                 * # # * $ *
                 * # * $ $ *
                 * * $ $ $ *
                 * * * * * * 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Given Pattern 
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;

        //Logic To Print Below Given Pattern 
        echo "Printing Below Given Pattern : <br>";
        for($i = $No;$i > 0;$i--)
        {
            for($j = 1;$j <= $No2;$j++) 
            {
                if(($i == $j)||($i == 1)||($j == 1)||($i == $No)||($j == $No2))
                {
                    echo "* &nbsp;&nbsp;&nbsp;&nbsp";
                }
                else if($i > $j)
                {
                    echo "# &nbsp;&nbsp;&nbsp";
                }
                else 
                {
                    echo "$ &nbsp;&nbsp;&nbsp";
                }
            }
            echo "<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 6;
        $No2 = 6;

        echo "Jay Ganesh...<br>";

        //Call To Main Function
        Pattern($No,$No2);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>