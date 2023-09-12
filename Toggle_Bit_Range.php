<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 12/09/2023
        Program : Write a program which accept one number from user and range of
                positions from user. Toggle all bits from that range.
                Input : 897 9 13
                Toggle all bits from position 9 to 13 of input number ie 879.

                UINT ToggleBitRange(UINT iNo, int iStart, int iEnd)
                {
                    // Logic
                } 
    */
                
    //Class Declaration
    class Bit
    {
        //Characteristics of Class
        public $iNo;
        public $iStart;
        public $iEnd;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
            $this->iStart = 0;
            $this->iEnd = 0;
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->iNo = 105;
            $this->iStart = 9;
            $this->iEnd = 13;
        }

        //Behaviour of Class To ToggleBits in Entered Range
        public function ToggleBitRange()
        {
            $iResult = 0;
            $iMask = 0X00000001;
            $i = 0;

            //Logic To Toggle Bits
            $iResult = $this->iNo;
            for($i = $this->iStart;$i <= $this->iEnd;$i++)
            {
                $iMask = $iMask << ($i - 1);
                $iResult = $iResult ^ $iMask;
                $iMask = 0X00000001;
            } 

            return $iResult;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iRet = 0;

        echo "Jay Ganesh....<br>";
        
        //Creating object of Bit Class
        $bobj = new Bit();

        //Call To Behaviours of Class
        $bobj->Accept();
        $iRet = $bobj->ToggleBitRange();

        //Printing Modified Number
        echo "Modified Number is : ",$iRet;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>