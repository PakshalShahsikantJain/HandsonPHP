<?php
    /*
        Author : Pakshal Jain
        Date : 28/08/2023
        Program : Write a program which accept string from user and copy that
                characters of that string into another string in reverse order.

                Input : "Marvellous Python"
                Output : "nohtyP suollevraM" 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class CopyStringRev
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

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS By Piyush Khairnar";
            $this->src = str_split($this->str);
        }

        //Behaviour of Class To Reverse Entered String 
        public function StrCpyRev()
        {
            $i = 0;
            $j = 0;

            //Logic To Copy Entered String in Reverse Order
            for($i = sizeof($this->src) - 1;$i > -1;$i--)
            {
                $this->dest[$j] = $this->src[$i];
                $j++;
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    function main()
    {
        echo "Jay Ganesh...<br>";
        
        //Creating object of CopyStringRev Class
        $cobj = new CopyStringRev();

        //Call To Behaviours of Class
        $cobj->Accept();
        $cobj->StrCpyRev();

        //Printing Copied String in Reverse Order
        echo "String Copied in Reverse order is : ",implode($cobj->dest);
    }

    //Call To Main function
    main();
?>