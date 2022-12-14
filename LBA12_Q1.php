<?php
    /*
        Author : Pakshal Jain 
        Date : 15/12/2022
        Program : To Print Below Pattern 
        
        Input : 5
        Output : * * * * * # # # # #

        Input : 6
        Output : * * * * * * # # # # # # #

        Input : -5
        Output : * * * * * # # # # #

        Input : 2
        Output : * * # #
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Above Pattern
    function Pattern($No)
    {
        $i = 0;
        
        //Handeling Condition if Entered Number is Less Than Zero
        if($No < 0)
        {
            $No = -$No;
        }

        //Logic
        for($i = 0;$i < $No;$i++)
        {
            echo "*\t";
        }

        for($i = 0;$i < $No;$i++)
        {
            echo "#\t";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = -5;

        echo "Jay Ganesh...<br>";
        
        //Call To Pattern Function
        Pattern($No);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>