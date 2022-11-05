<?php
    /*
        Author : Pakshal Jain
        Date : 23/10/2022
        Program : To Calculate Factorial of Entered Number
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Factorial
    function Factorial($No)
    {
        $i = 0;
        $fact = 1;

        //Handeling Condition if Entered Number is Negative
        if($No < 0)
        {
            $No = -$No;
        }
        
        //Logic
        for($i = $No;$i > 0;$i--)
        {
            $fact = $fact * $i;
        }

        return $fact;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $No = -10;
        $iret = 0;

        echo "Jay Ganesh...<br>";
    
        //Call To Factorial Function
        $iret = Factorial($No);

        //Printing Factoria Calculate 
        echo"Factorial of Entered Number is : ",$iret;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>