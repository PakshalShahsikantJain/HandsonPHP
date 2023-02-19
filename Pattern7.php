<?php
    /*
        Author : Pakshal Jain 
        Date : 17/02/2023
        Program : To Print Below Given Pattern 

        Input : 4
        Output : # 1 * # 2 * # 3 * # 4 *
    */

    //Function To Print Pattern
    function Pattern($No)
    {
        $i = 0;

        //Logic To Print Pattern
        for($i = 1;$i <= $No;$i++)
        {
            echo "#","\t",$i,"\t","*","\t";
        }
    }

    //Main Function
    function main()
    {
        $No = 5;
        echo "Jay Ganesh....<br>";
        
        //Call To Pattern Function
        Pattern($No);
    }

    //Call To Main Function
    main();
?>