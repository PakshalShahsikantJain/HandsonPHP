<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 04/09/2023
        Program : Write a program which accept one number and position from user and
                  check whether bit at that position is on or off. If bit is one return TURE
                  otherwise return FALSE.
                
                  Input : 10 2
                  Output : TRUE 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class CheckBit
    {
        //Characteristics of Class
        public $iNo = 0;
        public $iPos = 0;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
            $this->iPos = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->iNo = 10;
            $this->iPos = 2;
        }

        //Behaviour of Class To Check Bit is ON or OFF
        public function Check()
        {
            $iMask = 0X00000001;
            
            if($this->iNo < 0) 
            {
                $this->iNo = -$this->iNo;
            }

            if(($this->iPos < 1)||($this->iPos > 32))
            {
                return false;
            }

            $iMask = $iMask << ($this->iPos - 1);

            $iResult = $iMask & $this->iNo;
            if($iResult == $iMask)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $bret = false;

        echo "Jay Ganesh....<br>";

        //Creating object of CheckBit Class
        $cobj = new CheckBit();

        //Call To Behaviour of Class
        $cobj->Accept();
        $bret = $cobj->Check();
        
        //Handeling Condition if bret is TRUE
        if($bret == true) 
        {
            printf("Bit is ON at Entered At Position %d",$cobj->iPos);
        }
        //Handeling Condition if bret is FALSE
        else
        {
            printf("Bit is ON at Entered At Position %d",$cobj->iPos);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>