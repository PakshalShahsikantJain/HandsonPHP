<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 05/03/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 4 iCol = 4
        Output : A B C D
                a b c d
                A B C D
                a b c d 

    */
    //Function To Print Pattern
    function Pattern($No,$No2) 
    {
        $i = 0;
        $j = 0;
        
        //Logic To Print Pattern
        echo "Printing Below Given Pattern<br>";
        for($i = 0;$i < $No;$i++)
        {
            for($j = 0;$j < $No2;$j++)
            {
                if($i % 2 == 0)
                {
                    echo chr($j + 65),"\t";
                }
                else 
                {
                    echo chr($j + 97),"\t";
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
  
        //Call To Pattern Function
        Pattern($No,$No2);
    }

    //Call To main Function
    main();
?>