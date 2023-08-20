<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 12/08/2023
        Program : Write a program which accept string from user and convert it into
                lower case.

                Input : "Marvellous Multi OS"
                Output : marvellous multi os 
    */

    //Class Declaration
    class Convert
    {
        //Characteristisc of Class
        public $arr;
        public $str;

        //Constructor of Class
        public function __construct()
        {
            $this->arr = [];
            $this->str = " ";
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Pakshal Shashikant Jain";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Convert String 
        public function convert()
        {
            $i = 0;
            $ascii = 0;

            //Logic To Convert 
            while($i != sizeof($this->arr))
            {
                if(($this->arr[$i] >= 'A')&&($this->arr[$i] <= 'Z'))
                {
                    $ascii =  ord($this->arr[$i]) + 32;

                    $this->arr[$i] = chr($ascii);
                }
                $i++;
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh...<br>";

        //Creatin object of Convert Class
        $cobj = new Convert();

        //Call To Behaviour of Class
        $cobj->Accept();
        $cobj->convert();

        //Printing Converted String 
        echo "Converted String is : ",implode($cobj->arr);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>