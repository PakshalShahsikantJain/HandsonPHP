<?php
    /*
        Author : Pakshal Jain
        Date : 01/10/2022
        Program : To Calculate Multiplication of Factors of Entered Number
    */
    
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //Function To Calclulate Multiplication of Factors of Entered Number
    function Fact_Mult($No) {
        $i = 1;
        $Mult = 1;

        //Logic
        for($i = 1;$i < $No;$i++)
        {
            if($No % $i == 0)
            {
                $Mult = $Mult * $i;
            }
        }

        return $Mult;
    }   

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() {
        $No = 12;
        $iret = 0;

        echo "Jay Ganesh....<br>";
        $iret = Fact_Mult($No);

        echo "Multiplication of Factors of Entered Number is : ",$iret;
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    //Call To main Function
    main();
?>