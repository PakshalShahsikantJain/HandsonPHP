<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 30/09/2023
        Program : Write a program which accept string from user and replace each
                occurrence of first character of each word into capital case.
        
                Input : "marvellous infosystems by Piyush khairnar"
                Output : "Marvellous Infosystems By Piyush Khairnar"
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class StringConvert
    {
        //Characteristics of Class
        public $str;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
        }   

        //Behaviour of Class To Accept Input from user
        public function Accept()
        {
            $this->str = "pakshal shashikant jain";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Convert String Case
        public function StrCap()
        {
            $i = 0;
            $ascii = 0;

            if($this->arr == null)
            {
                return;
            }

            //Logic To Convert
            if(($this->arr[$i] >= 'a')&&($this->arr[$i] <= 'z'))
            {
                $ascii = ord($this->arr[$i]) - 32;
                $this->arr[$i] = chr($ascii);
            }
            while($i != sizeof($this->arr))
            {
                if($this->arr[$i] == ' ')
                {
                    while(($this->arr[$i] == ' ')&&($i != sizeof($this->arr)))
                    {
                        $i++;
                    }

                    if(($this->arr[$i] >= 'a')&&($this->arr[$i] <= 'z'))
                    {
                        $ascii = ord($this->arr[$i]) - 32;
                        $this->arr[$i] = chr($ascii);
                    }
                }

                $i++;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh.....<br>";
        
        //Creating object of StringConvert Class
        $sobj = new StringConvert();

        //Call To Behaviours of Class
        $sobj->Accept();
        $sobj->StrCap();

        //Printing Modified String 
        echo "Modified String is : ",implode($sobj->arr);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>