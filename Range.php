<?php
    /*
        Author : Pakshal Jain
        Date : 22/11/2022
        Program : To Calculate Summation of Numbers in Entered Range
    */

    ///////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Summation
    function Summation($No,$No2)
    {
        $i = 0;
        $sum = 0;
        
        for($i = $No;$i <= $No2;$i++)
        {
            $sum = $sum + $i;
        }

        return $sum;
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 23;
        $No2 = 30;
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        //Handeling Condition if Entered Number is Negative
        if(($No < 0)||($No2 < 0))
        {
            echo"Invalid Range";
            return;
        }
        //Handeling Condition if Starting Number is Greater Than Ending number
        else if($No > $No2) 
        {
            echo "Invalid Range";
            return;
        }

        //Call To Summation Function
        $iret = Summation($No,$No2);

        echo "Summation of numbers in Entered Range is : ",$iret;
    }

    //////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>