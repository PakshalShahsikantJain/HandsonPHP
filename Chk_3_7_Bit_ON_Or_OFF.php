<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 12/09/2023
        Program : Write a program which accept one number , two positions from user and
                    check whether bit at first or bit at second position is ON or OFF.

                    Input : 10 3 7
                    Output : FALSE 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Bit
    {
        //Characteristics of Class
        public $iNo;
        public $iPos1;
        public $iPos2;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
            $this->iPos1 = 0;
            $this->iPos2 = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->iNo = 45;
            $this->iPos1 = 3;
            $this->iPos2 = 7;
        }

        //Behaviour of Class To Check if Bit is ON/OFF
        public function ChkBit()
        {
            $iMask = 0X00000001;  
            $iMask2 = 0X00000001;      
            $iResult = 0;
            $iResult2 = 0;

            if($this->iNo < 0)
            {
                $this->iNo = -$this->iNo;
            }

            $iMask = $iMask << ($this->iPos1 - 1);
            $iMask2 = $iMask2 << ($this->iPos2 - 1);

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