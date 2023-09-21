<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 14/09/2023
        Program : Write a program which 2 strings from user and check whether
                contents of two strings are equal or not. (Implement strcmp()
                function).

                Input : "Marvellous Infosystems"
                        "Marvellous Infosystems"
                Output : TRUE 
    */

    //Class Declaration
    class StringCmp
    {
        //Characteristics of Class
        public $str1;
        public $str2;
        public $arr;
        public $brr;

        //Constructor of Class
        public function __construct()
        {
            $this->str1 = " ";
            $this->str2 = " ";
            $this->arr = [];
            $this->brr = [];
        }

        //Behaviour of Class TO Take Input from user
        public function Accept()
        {
            $this->str1 = "Pakshal Jain";
            $this->str2 = "Pakshal JUin";
            $this->arr = str_split($this->str1);
            $this->brr = str_split($this->str2);
        }

        //Behaviour of Class To Compare Two strings
        public function StrCmpX()
        {
            $i = 0;
            $j = 0;

            if(($this->arr == null)&&($this->brr == null))
            {
                return false;
            }
            else if(sizeof($this->arr) != sizeof($this->brr))
            {
                return false;
            }

            //Logic To Compare
            while(($i != sizeof($this->arr) - 1)&&($j != sizeof($this->brr) - 1))
            {
                if($this->arr[$i] != $this->brr[$j])
                {
                    break;
                }
                $i++;
                $j++;
            }

            if($this->arr[$i] != $this->brr[$j])
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }//End of Class

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $bret = false;

        echo "Jay Ganesh...<br>";
        
        //Creating object of StringCmp Class
        $sobj = new StringCmp();
        //Call To Behaviours of Class
        $sobj->Accept();
        $bret = $sobj->StrCmpX();

        //Printing Output According To Result
        if($bret == true)
        {
            echo "Both String are Equal";
        }
        else
        {
            echo "Both Strings are Not Equal";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>