<?php
    /*
        Author : Pakshal Jain 
        Date : 02/03/2023
        Program : To Print Below Given Pattern
        Input : iRow = 3 iCol = 5
        Output : 5 4 3 2 1
                 5 4 3 2 1
                 5 4 3 2 1 
    */
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern
    function Pattern($No,$No2)
    {
        $i = 0;
        $j = 0;

        //Logic To Print Given Pattern
        echo "Printing Given Pattern : <br>";
        for($i = 1;$i <= $No;$i++)
        {
            for($j = $No2;$j > 0;$j--)
            {
                echo $j,"\t";
            }
            echo "<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 3;
        $No2 = 5;

        echo "Jay Ganesh...<br>";

        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>