<?php
    /*
        Author : Pakshal Jain 
        Date : 28/08/2023
        Program : Write a program which accept string from user and copy that
                characters of that string into another string by removing all white
                spaces.

                Input : "Marvel lous Pyth on"
                Output : "MarvellousPython"
    */

    //Class Declaration
    class CopyString
    {
        //Characteristics of Class
        public $src;
        public $dest;
        public $str;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->src = [];
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marve   llous   Pyth   On";
            $this->src = str_split($this->str);            
        }

        //Behaviour of Class To Copy String After Removing White Spaces
        public function StrCpyX()
        {
            $i = 0;

            //Logic To Copy String After Removing White Spaces
            while($i != sizeof($this->src))
            {
                if($this->src[$i] != ' ')
                {
                    $this->dest[$i] = $this->src[$i];
                }

                $i++;
            }
        }

    }

    ///////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh....<br>";
        
        //Creating object of Copy String Class
        $cobj = new CopyString();
        //Call To Behaviours of Class
        $cobj->Accept();
        $cobj->StrCpyX();

        //Printing Copied String
        printf("String Copied After Removing White Spaces is : %s",implode($cobj->dest));
    }

    //Call To Main Function
    main();
?>