<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 31/08/2023
        Program : Write a program which checks whether first and last bit is On or
                OFF. First bit means bit number 1 and last bit means bit number 32. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check Bit is or ON or OFF
    function ChkBit($iNo) 
    {                                // 0     8     1     0     4     0     4     0 
        $iMask = 0X80000001;        // 0000  1000  0001  0000  0100  0000  0100  0000  
        $bret = false;
        $iResult = 0;

        if($iNo < 0)
        {
            $iNo = -$iNo;
        }

        //Logic To Check Bit is on or off
        $iResult = $iNo & $iMask;

        if($iResult == $iMask)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $iNo = 2147483648;
        $bret = false;

        echo "Jay Ganesh...<br>";

        //Call To ChkBit Function
        $bret = ChkBit($iNo);

        if($bret == true)
        {
            echo "All Given Bits are ON";
        }
        else
        {
            echo "One or More Givens Bits are OFF";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>