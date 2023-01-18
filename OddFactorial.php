<?php

    /*
        Author : Pakshal Jain 
        Date : 14/01/2023
        Program : To Calculate OddFactorial of Entered Number
    */

    //Function To Calculate OddFactorial of Enterd Number
    function OddFact($No) 
    {
        $Fact = 1;
        $i  = 0;
        
        if($No < 0)
        {
            $No = -$No;
        }
        
        //Logic To Calculate 
        for($i = $No;$i > 0;$i--) 
        {
            if($i % 2 != 0) 
            {
                $Fact = $Fact * $i;
            }
        }

        return $Fact;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = -5;
        $iret = 0;

        echo "Jay Ganesh...<br>";

        echo "Inside Main Function";
        
        //Call To OddFact Function
        $iret = OddFact($No);

        //Printing Obtained Output
        echo "Odd Factorial of Entered Number is : ",$iret;
    }

    /////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main(); 
?>