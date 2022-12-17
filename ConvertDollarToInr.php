<?php
    /*
        Author : Pakshal Jain
        Date : 15/12/2022
        Program : To Convert Entered Money From Dollar To Inr
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Convert $ to ₹
    function Convert($No) {
        $ans = 0;
        
        //Handeling Condition if Entered Number is Negative
        if($No < 0)
        {
            $No = -$No;
        }

        //Logic
        $ans = $No * 70;

        return $ans;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() {
        $No = -10;
        $iret = 0;

        echo"Jay Ganesh...<br>";

        //Call To Convert Function
        $iret = Convert($No);

        //Printing obtained Output
        echo "Money Converted From $ To ₹ is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>