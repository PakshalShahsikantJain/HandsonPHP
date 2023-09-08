<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 04/09/2023
        Program : Write a program which accept one number and position from user and ON
                that bit. Return modified number.

                Input : 10 3
                Output : 14 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Bit
    {
        //Characteristics of Class
        public $iNo;
        public $iPos;

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
            $this->iPos = 3;
        }

        //Behaviour of Class To On Entered Bit
        public function OnBit()
        {
            $iMask = 0X00000001;
            $iResult = 0;
            
            if($this->iNo < 0)
            {
                $this->iNo = -$this->iNo;
            }

            if(($this->iPos < 1)||($this->iPos > 32))
            {
                return 0;
            }

            //Logic To ON Bit At Entered Position
            $iMask = $iMask << ($this->iPos - 1);
            $iResult = $iMask & $this->iNo;

            if($iResult != $iMask)
            {
                $iResult = $iMask ^ $this->iNo;
            }
            else
            {
                $iResult = $this->iNo;
            }

            return $iResult;
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $iret = 0;

        echo "Jay Ganesh......<br>";
    
        //Creating object of Bit Class
        $bobj = new Bit();

        //Call To Behaviours of Class
        $bobj->Accept();
        $iret = $bobj->OnBit();

        if($iret == $bobj->iNo)
        {
            echo "Bit Is Already ON";

            return;
        }
        //Printing Modified Number
        echo "Modified Number is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>