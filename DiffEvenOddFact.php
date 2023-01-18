<?php
    /*
        Author : Pakshal Jain
        Date : 17/01/2023
        Program : To Calculate Even And Odd Factorial of Entered Number
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Difference
    function Difference($No) 
    {
        $i = 0;
        $EvenFact = 1;
        $OddFact = 1;
        $Diff = 0;  
        
        //Handeling Condition if Entered Number is Negative
        if($No < 0)
        {
            $No = -$No;
        }

        //Logic To Calculate Difference
        for($i = $No;$i > 0;$i--)
        {
            if($i % 2 != 0)
            {
                $OddFact = $OddFact * $i;
            }
            else 
            {
                $EvenFact = $EvenFact * $i;
            }
        }
        
        //Calculating Difference
        $Diff = $EvenFact - $OddFact;

        return $Diff;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = -5;
        $iret = 0;

        echo "Jay Ganesh...<br>";

        //Call To Difference
        $iret = Difference($No);

        echo "Difference Between Even and Odd Factorial of Entered Number is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    main();
?>