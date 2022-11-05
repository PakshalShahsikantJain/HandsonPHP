<?php
    /*
        Author : Pakshal Jain
        Date : 10/03/2022
        Program : To Print Factors of Entered Number in Reverse Order
    */

    ////////////////////////////////////////////////////////////////////////////////////////////

    function Fact($No)
    {
        $i = 0;
        
        echo("Factors of Entered Number in Reverse Order is : <br>");

        for($i = $No - 1;$i > 0;$i--)
        {
            if($No % $i == 0)
            {
                echo$i," ";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $No = 12;

        echo "Jay Ganesh...";
        
        //Call To Fact Function
        Fact($No);
    }

    //Call To main Function
    main();
?>