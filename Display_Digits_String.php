<?php
    /*  
    Author : Pakshal Shashikant Jain 
    Date : 15/08/2023
    Program : Write a program which accept string from user and display only
              digits from that string.

              Input : “marve89llous121”
              Output : 89121
              Input : “Demo”
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Fuction To Print Digits From Entered String 
    function StrDigits($arr)
    {
        $i = 0;
        
        //Logic To Print Digits 
        echo "Printing Digits Which are Present in Entered String : <br>";
        while($i != sizeof($arr))
        {
            if(($arr[$i] >= '0')&&($arr[$i] <= '9'))
            {
                echo $arr[$i];
            }   

            $i++;
        }
    }   

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $arr = [];
        $str = "marve89llous121";

        echo "Jay Ganesh<br>";
        
        $arr = str_split($str);

        //Call To StrDigits Function
        StrDigits($arr);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To main Function
    main();
?>