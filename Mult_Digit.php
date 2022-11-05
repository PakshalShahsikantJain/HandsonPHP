<?php
    /*
        Auhtor : Pakshal Jain
        Date : 20/10/2022
        Program : To Calucalte Multiplication of Digits of Entered Number
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calucalte Multiplication of Digits
    function Multiplication($No)
    {
        $Digit = 0;
        $Mult = 1;
        
        //Logic To Calculate Mutliplication
        while($No != 0)
        {
            $Digit = $No % 10;
            if($Digit == 0)
            {
                $Digit = 1;
            }
            $Mult = $Mult * $Digit;
            $No = floor($No / 10);
        }

        return $Mult;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 1018;
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        //Call To Multiplication Function
        $iret = Multiplication($No);

        //Printing Multiplication of Digits of Entered Number
        echo "Multiplication of Digits of Entered Number is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>