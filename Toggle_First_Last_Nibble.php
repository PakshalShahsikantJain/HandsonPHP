<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 07/99/2023
        Program : Write a program which accept one number from user and toggle contents 
                  of first and last nibble of the number. Return modified number. (Nibble is a
                  group of four bits) 

    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Nibble
    {
        //Characteristics of Class
        public $iNo;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
            $this->iPos = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->iNo = 508;
        }

        //Behaviour of Class To Toggle Entered Bit
        public function Toggle()
        {
            $iMask = 0XF000000F;
            $iResult = 0;
            
            if($this->iNo < 0)
            {
                $this->iNo = -$this->iNo;
            }

            //Logic To Toggle Contents of First and Last Nibble of Entered Number
            $iResult = $iMask ^ $this->iNo;
            
            return $iResult;
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $iret = 0;

        echo "Jay Ganesh......<br>";
    
        //Creating object of Nibble Class
        $nobj = new Nibble();

        //Call To Behaviours of Class
        $nobj->Accept();
        $iret = $nobj->Toggle();

        //Printing Modified Number
        echo "Modified Number is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>