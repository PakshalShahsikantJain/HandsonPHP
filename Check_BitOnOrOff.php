<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 30/08/2023
        Program : Write a program which checks whether 15th bit is On or OFF.
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check Bit is or ON or OFF
    function ChkBit($iNo) 
    {
        $iMask = 0X00004000;
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
        $iNo = 16547;
        $bret = false;

        echo "Jay Ganesh...<br>";

        //Call To ChkBit Function
        $bret = ChkBit($iNo);

        if($bret == true)
        {
            echo "15th Bit is ON";
        }
        else
        {
            echo "15th Bit is OFF";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>