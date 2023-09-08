<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 08/09/2023
        Program : Write a program which accept two numbers from user and display position
                of common ON bits from that two numbers.
                Input : 10 15 (1010 1111)
                Output : 2 4
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Bit
    {
        //Characteristics of Class
        public $iNo;
        public $iNo2;

        //Constructor of Class
        public function __construct()
        {
            $this->iNo = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->iNo = 10;
            $this->iNo2 = 15;
        }

        //Behaviour of Class To Count Number of ON Bits
        public function CommonBit()
        {
            $iRem = 0;
            $ipos = 0;
        
            //Logic To Display
            $iResult = $this->iNo & $this->iNo2;
        
            printf("Common Bits Position From Entered Two Number is : <br>");
            $ipos = 1;
            while($iResult != 0)
            {
                $iRem = $iResult % 2;
                if($iRem == 1)
                {
                    printf("%d\t",$ipos);
                }
                $ipos++;
                $iResult = $iResult / 2;
            }
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
        $bobj->CommonBit();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>