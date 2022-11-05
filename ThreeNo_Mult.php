<?php
    /*
        Author : Pakshal Jain
        Date :12/10/2022
        Program : To Calculate Multiplication of Entered Three Numbers
    */

    //Function To Calculate Multiplication
    function Mult($No,$No2,$No3) 
    {
        $ans = 0;

        //Handeling Conditions if Any of Entered Number is Zero
        if(($No == 0)&&($No2 == 0))
        {
            $ans = $No3;
        }
        else if(($No2 == 0)&&($No3 == 0))
        {
            $ans = $No;
        }
        else if(($No == 0)&&($No3 == 0))
        {
            $ans = $No2;
        }
        else if($No == 0)
        {
            $ans = $No2 * $No3;
        }
        else if($No2 == 0)
        {
            $ans = $No * $No3;
        }
        else if($No3 == 0)
        {
            $ans = $No * $No2;
        }
        //Handeling Condition if Non Of Entered Number is Zero
        else 
        {
            $ans = $No * $No2 * $No3;
        }

        return $ans;

    }
    //Main Function
    function main() 
    {
        //Required Libraries
        $No = 2;
        $No2 = 0;
        $No3 = 5;
        $iret = 0;

        echo "Jay Ganesh...<br>";

        //Handling Constion if All Entered Number is Zero
        if(($No == 0)&&($No2 == 0)&&($No3 == 0))
        {
            $iret = $No * $No2 * $No3;
        }
        else 
        {   
            //Call To Mult Function
            $iret = Mult($No,$No2,$No3);
        }
        
        echo "Multiplication of Entered Number is : ",$iret;
    }

    //Call To Make Function
    main();
?>