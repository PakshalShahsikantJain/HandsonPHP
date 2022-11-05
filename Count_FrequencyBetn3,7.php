<?php
    /*
        Author : Pakshal Jain 
        Date : 19/10/2022
        Program : To Count Frequecy of Digits Which Are Between 3 and 7 in Entered Number
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Count Frequecy
    function Frequency($No)
    {
        $Digit = 0;
        $icnt = 0;
        
        //Logic
        while($No != 0)
        {
            $Digit = $No % 10;
            if(($Digit > 3)&&($Digit < 7))
            {
                $icnt++;
            }
            $No = floor($No / 10);
        }

        return $icnt;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No =  1018;
        $iret = 0;

        echo "Jay Ganesh..<br>";
        
        //Call To Frequency Function
        $iret = Frequency($No);

        echo "Frequency of Digits which Are Between 3 and 7  is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main()
?>