<?php
    /*
        Author : Pakshal Jain
        Date : 16/10/2022
        Program : To Check Entered Number Contains Zero or Not
    */

    //Function To Check Entered Number Contains Zero or Not
    function Check($No) 
    {
        $Digit = 0;
        
        //Logic To Check
        while($No != 0)
        {
            $Digit = $No % 10;
            if($Digit == 0)
            {
                break;
            }
            $No = floor($No / 10);
        }

        //Handeling Condition if Number Contains Zero
        if($Digit == 0)
        {
            return true;
        }
        //Handeling Condition if Number Does Not Contains Zero
        else 
        {
            return false;
        }
    }

    //Main Function
    function main() 
    {
        $No = 9000;

        $bret = false;
        
        echo "Jay Ganesh...<br>";

        //Call To Check Function
        $bret = Check($No);

        //Handeling Condition if Return Value is True
        if($bret == true)
        {
            echo "Entered Number Contains Zero in it";
        }
        //Handeling Condition if Return value is False
        else 
        {
            echo "Entered Number Does Not Constains Zero in it";
        }
    }
    
    //Call To Check Function
    main();
?>