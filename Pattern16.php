<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 15/03/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 3 iCol = 4
        Output : 1 2 3 4
                 5 6 7 8
                 9 10 11 12 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern 
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;
        $k = 1;
    
        //Logic To Print Pattern 
        echo "Printing Below Given Pattern : <br>";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 0;$j < $No2;$j++)
            {
                echo $k,"\t";
                $k = $k + 1;
            }
            echo "<br>";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 3;
        $No2 = 4;

        echo "Jay Ganesh....<br>";
        
        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //Call To Main Function
    main();
?>