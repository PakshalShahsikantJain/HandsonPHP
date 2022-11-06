<?php
    /*
        Author : Pakshal Jain
        Date : 06/11/2022
        Program : To Print Even Numbers in Entered Range
    */

    //////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Even Numbers
    function Display($No,$No2)
    {
        $i = 0;

        //Logic To Print Even Numbers
        echo"Printing Even Numbers in Entered Range<br>";
        for($i = $No;$i <= $No2;$i++)
        {
            if($i % 2 == 0)
            {
                echo $i,"\t";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 23;
        $No2 = 35;

        echo "Jay Ganesh...<br>";
        
        //Call To Display Function
        Display($No,$No2);
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main()
?>