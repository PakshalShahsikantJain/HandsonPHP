<?php
    /*
        Author : Pakshal Jain
        Date : 12/12/2022
        Program : To Display Entered Range in Reverse Order
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Display Range In Reverse 
    function Display($No,$No2)
    {
        $i = 0;

        //Logic
        echo "Printing Numbers in Entered Range in Reverse Order<br>";

        for($i = $No2;$i >= $No;$i--)
        {
            echo $i,"\t";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 23;
        $No2 = 35;

        echo "Jay ganesh...<br>";
        
        //Handeling Condition if Entered Number is Negative or Starting Number is Greater Than Ending Number
        if(($No < 0)||($No > $No2))
        {
            echo "Invalid Range";
            return;
        }
        
        //Call To Display Function
        Display($No,$No2);
    }

    //Call To Main Function
    main();
?>