<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 30/08/2023
        Program : Write a program which checks whether 7th & 15th & 21st , 28th bit is On or OFF. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check Bit is or ON or OFF
    function ChkBit($iNo) 
    {                                // 0     8     1     0     4     0     4     0 
        $iMask = 0X08104040;        // 0000  1000  0001  0000  0100  0000  0100  0000  
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
        $iNo = 135282752;
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