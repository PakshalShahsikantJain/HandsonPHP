<?php
    /*
        Author : Pakshal Jain 
        Date : 04/03/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 4 iCol = 4
        Output : A B C D
                 A B C D
                 A B C D
                 A B C D 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Pattern
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;

        //Logic To Print Given Pattern 
        echo "Printing Below Given Pattern";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 0;$j < $No2;$j++)
            {
                echo chr($j + 65),"\t";
            }
            echo "<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh...<br>";

        //Call To Pattern Function
        Pattern($No,$No2);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>