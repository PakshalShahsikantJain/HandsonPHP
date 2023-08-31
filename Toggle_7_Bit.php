<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 01/09/2023
        Program : Write a program which accept one number from user and toggle 7th bit of
                  that number. Return modified number.  
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class ToggleBit
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
            $this->No = 137;
        }

        //Behaviour of Class To Toggle Bit
        public function togglebit()
        {
            $iResult = 0;           //  0    0    0    0    0    0   4     0
            $iMask = 0X00000040;   // 0000 0000 0000 0000 0000 0000 0100 0000

            $iResult = $iMask ^ $this->No;

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
        $cobj = new ToggleBit();

        //Call To Behaviour of Class
        $cobj->Accept();
        $iRet = $cobj->togglebit();
        
        //Printing Modified Number 
        echo "Modified Number is : ",$iRet;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>