<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 30/08/2023
        Program : Write a program which checks whether 5th 18th bit is On or OFF.
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check Bit is or ON or OFF
    function ChkBit($iNo) 
    {                                // 0     0     0     2     0     0     1     0 
        $iMask = 0X00020010;        // 0000  0000  0000  0010  0000  0000  0001  0000
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
        $iNo = 147635;
        $bret = false;

        echo "Jay Ganesh...<br>";

        //Call To ChkBit Function
        $bret = ChkBit($iNo);

        if($bret == true)
        {
            echo "5th and 18th Bit is ON";
        }
        else
        {
            echo "5th or 18th Bit is OFF";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>