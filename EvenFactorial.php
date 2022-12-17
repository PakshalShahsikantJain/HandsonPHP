<?php
    /*
        Author : Pakshal Jain
        Date : 17/12/2022
        Program : To Calcualte Even Factorial of Entered Number
    */
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Calcualte Even Factorial
    function EvenFactorial($No) 
    {
        $i = 0;
        $Fact = 1;
        
        //Handeling Condition if Entered Number is Negative
        if($No < 0)
        {
            $No = -$No;
        }   

        //Logic To Calculate Even Factorial of Number
        for($i = $No;$i > 0;$i--)
        {
            if($i  % 2 == 0) 
            {
                $Fact = $Fact * $i;
            }
        }

        return $Fact;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = -10;
        $iret = 0;

        echo "Jay ganesh....<br>";
        
        //Call To Even Factorial Function
        $iret = EvenFactorial($No);

        //Printing obtained Output 
        echo "Even Factorial of Entered Number is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main(); 
?>