<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 29/08/2023
        Program : Write a program which accept string from user and copy that
                characters of that string into another string by converting all capital
                characters into small case.

                Input : "Marvellous Python 2"
                Output : "marvellous python 2" 
    */


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class CopyString
    {
        //Characteristics of Class
        public $str;
        public $src;
        public $dest;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->src = [];
            $this->dest = [];
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->str = "Marvellous multi OS";
            $this->src = str_split($this->str);
        }

        //Behaviour of Class To Copy Converted String into Another String 
        public function StrCpySmall()
        {
            $i = 0;
            $ascii = 0;

            //Logic To Copy
            while($i != sizeof($this->src)) 
            {
                if(($this->src[$i] >= 'A')&&($this->src[$i] <= 'Z'))
                {
                    $ascii = ord($this->src[$i]) + 32;
                    $this->src[$i] = chr($ascii);
                }
                $this->dest[$i] = $this->src[$i];
                $i++;
            }
        }
    }
    
    //Main Function
    function main()
    {
        echo "Jay Ganesh...<br>";

        //Creating object of CopyString Class
        $cobj  = new CopyString();

        //Call To Behaviours of Class
        $cobj->Accept();
        $cobj->StrCpySmall();

        //Printing Copied String 
        printf("Copied String is : %s",implode($cobj->dest));
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call to Main Function
    main();
?>