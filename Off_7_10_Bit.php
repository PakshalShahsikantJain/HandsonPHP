<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 01/09/2023
        Program : Write a program which accept one number from user and off 7th and 10th
                  bit of that number. Return modified number.  
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class OffBit
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
            $this->No = 45674;
        }

        //Behaviour of Class To Off Bit If On
        public function offbit()
        {
            $iResult = 0;           //  0    0    0    0    0    2    4    0
            $iMask = 0X00000240;   // 0000 0000 0000 0000 0000 0010 0100 0000

            $iResult = $iMask & $this->No;

            if($iResult == $iMask)
            {
                $iResult = $iMask ^ $this->No;
            }

            return $iResult;
        }
    }   
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $iRet = 0;

        echo "Jay Ganesh......<br>";

        //Creating object of OffBit Class
        $cobj = new OffBit();

        //Call To Behaviour of Class
        $cobj->Accept();
        $iRet = $cobj->offbit();
        
        //Printing Modified Number 
        echo "Modified Number is : ",$iRet;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>