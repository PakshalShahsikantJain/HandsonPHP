<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 09/09/2023
        Program : Write a program which accept one number from user and check whether
                9th or 12th bit is on or off.
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Bit
    {
        //Characteristics of Class
        public $iNo;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->iNo = 25;
        }

        //Behaviour of Class To Check if Bit is ON/OFF
        public function ChkBit()
        {
                                       //  0     0     0     0     0     1     0     0
            $iMask = 0X00000100;       // 0000  0000  0000  0000  0000  0001  0000  0000
                                       //  0     0     0     0     0     8     0     0                                                            
            $iMask2 = 0X00000800;      // 0000  0000  0000  0000  0000  1000  0000  0000
            $iResult = 0;
            $iResult2 = 0;

            if($this->iNo < 0)
            {
                $this->iNo = -$this->iNo;
            }

            //Logic to Check Bit is on or off
            $iResult = $this->iNo & $iMask;
            $iResult2 = $this->iNo & $iMask2;

            if(($iResult == $iMask)||($iResult2 == $iMask2))
            {
                return true;
            }
            else
            {
                return false;
            }        
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $bret = false;

        echo "Jay Ganesh......<br>";
    
        //Creating object of Bit Class
        $bobj = new Bit();

        //Call To Behaviours of Class
        $bobj->Accept();
        $bret = $bobj->ChkBit();

        if($bret == true)
        {
            echo "One Or Both Bits are ON";
        }
        else
        {
            echo "Both Bits are OFF";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>