<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 07/09/2023
        Program : Write a program which accept one number from user and count number of
                ON (1) bits in it without using % and / operator.

                Input : 11
                Output : 3
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
            $this->iNo = 10;
        }

        //Behaviour of Class To Count Number of ON Bits
        public function CountOne()
        {
            $icnt = 0;
            $i = 0;
            $iMask = 0X00000001;
            $iResult = 0;
            
            if($this->iNo < 0)
            {
                $this->iNo = -$this->iNo;
            }

            //Logic To Count
            for($i = 1;$i <= 32;$i++)
            {
                $iMask = $iMask << ($i - 1);
                $iResult = $iMask & $this->iNo;
                if($iResult == $iMask)
                {
                    $icnt++;
                }
                $iMask = 0X00000001;
                $iResult = 0;
            }

            return $icnt;
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
        $iret = $bobj->CountOne();

        echo "Count of Number of ON Bit is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>