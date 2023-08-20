<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 13/08/2023
        Program : Write a program which accept string from user and toggle the case.
                
                Input : "Marvellous Multi OS"
                Output : mARVELLOUS mULTI os
    */

    //Class Declaration
    class Toggle
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
            $this->str = "Marvellous Multi OS";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Toggle String 
        public function toggle()
        {
            $i = 0;
            $ascii = 0;

            //Logic To Toggle
            while($i != sizeof($this->arr))
            {
                if(($this->arr[$i] >= 'a')&&($this->arr[$i] <= 'z'))
                {
                    $ascii =  ord($this->arr[$i]) - 32;

                    $this->arr[$i] = chr($ascii);
                }
                else if(($this->arr[$i] >= 'A')&&($this->arr[$i] <= 'Z'))
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
        $tobj = new Toggle();

        //Call To Behaviour of Class
        $tobj->Accept();
        $tobj->toggle();

        //Printing Converted String 
        echo "Modified String is : ",implode($tobj->arr);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>