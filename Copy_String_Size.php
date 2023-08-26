<?php   
    /*
        Author : Pakshal Shashikant Jain
        Date : 24/08/2023
        Program : Write a program which accept string from user and copy the
                contents of that string into another string. (Implement strncpy() function)
                
                Input : "Marvellous Multi OS"
                        10
                Output : Marvellous
                
                Note : If third parameter is greater than the size of source string then
                copy whole string into destination. 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class CopyString 
    {
        //Characteristics of Class
        public $isize;
        public $arr;
        public $brr;
        public $str;

        //Constructor of Class
        public function __construct()
        {
            $this->arr = [];
            $this->brr = [];
            $this->str = " ";
            $this->isize = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS";
            $this->isize = 12;
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Copy String   
        public function StrNCpyX()
        {
            $i = 0;

            //Logic To Copy Contents of String
            while($i != sizeof($this->arr)&&($this->isize != 0))
            {
                $this->brr[$i] = $this->arr[$i];
                $i++;
                $this->isize--; 
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh....<br>";
        
        //Creating object of CopyString 
        $cobj = new CopyString();

        //Call TO Behaviour of Class
        $cobj->Accept();
        $cobj->StrNCpyX();

        //Printing Copied String 
        echo "Copied String is : ",implode($cobj->brr);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>