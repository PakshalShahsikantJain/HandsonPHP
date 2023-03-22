<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 18/03/2023
        Program : To Print Below Given Pattern
        
        Input : iRow = 4 iCol = 4
        Output : 1 2 3 4
                2 3 4 5
                3 4 5 6
                4 5 6 7 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Below Pattern
    function Pattern($No,$No2)
    {
        $i = 0;
        $j = 0;
        $k = 1;

        //Logic To print Given Pattern
        echo "Printing Below Given Pattern <br>";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 0;$j < $No2;$j++)
            {
                echo $k,"\t";
                $k++;
                if($j == $No2 - 1)
                {
                    $k = $k - 3;
                }
            }
            echo "<br>";
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh...<br>";

        //Call To Pattern Function
        Pattern($No,$No2);
    }

    ////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>