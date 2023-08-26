<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 25/08/2023
        Program : Write a program which accept string from user and copy capital
                characters of that string into another string.
                
                Input : "Marvellous Multi OS"
                Output : "MMOS"
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
            $this->str = "Pakshal Jain";
            $this->src = str_split($this->str);
        }

        //Behaviour of Class To Copy Capital Letters into Another String 
        public function StrCapCpy()
        {
            $i = 0;

            //Logic To Copy
            while($i != sizeof($this->src)) 
            {
                if(($this->src[$i] >= 'A')&&($this->src[$i] <= 'Z'))
                {
                    $this->dest[$i] = $this->src[$i];
                }
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
        $cobj->StrCapCpy();

        //Printing Copied String 
        printf("Capital Letters From Copied String is : %s",implode($cobj->dest));
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call to Main Function
    main();
?>