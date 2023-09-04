<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 01/09/2023
        Program : Write a program which accept one number from user and on its first 4
                bits. Return modified number.

                Input : 73
                Output : 79 
    */


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Bit
    {
        //Characteiristics of Class
        public $No;

        //Constructor of Class
        public function __construct()
        {
            $this->No = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->No = 73;
        }

        //Behaviour of Class To On First Four Bits
        public function OnBit()
        {
            $iResult = 0;           //  0    0    0    0    0   0    0    F
            $iMask = 0X0000000F;   // 0000 0000 0000 0000 0000 0000 0000 1111

            $iResult = $iMask | $this->No;

            return $iResult;
        }
    }   
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $iRet = 0;

        echo "Jay Ganesh......<br>";

        //Creating object of ToggleBit Class
        $bobj = new Bit();

        //Call To Behaviour of Class
        $bobj->Accept();
        $iRet = $bobj->OnBit();
        
        //Printing Modified Number 
        echo "Modified Number is : ",$iRet;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>