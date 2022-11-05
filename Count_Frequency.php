<?php
    /*
        Author : Pakshal Jain
        Date : 17/10/2022
        Program : To Count frequency of 2 in Entered Number
    */  

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Funcnction To Count Frequency of Two in Entered Number
    function Frequency($No) 
    {
        $icnt = 0;
        $Digit = 0;
        
        //Logic To Cont Frequecy of 2 Present in Entered Number
        while($No != 0)
        {
            $Digit = $No % 10;
            if($Digit == 2)
            {
                $icnt++;
            }
            $No = floor($No / 10);
        }

        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 4589;
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        //Call To Frequency Function
        $iret = Frequency($No);
        
        //Printing Frequency of Two Present in Entered Number
        echo "Frequecy of 2 in Entered Number is : ",$iret;
    }

    //call To main Function
    main();
?>