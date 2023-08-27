<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 27/08/2023
        Program : Write a program which 2 strings from user and concat second string
                after first string. (Implement strcat() function).

                Input : "Marvellous Infosystems"
                        "Logic Building"

                Output : "Marvellous Infosystems Logic Building" 
    */
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Concatenation
    {
        //Characteristics of Class
        public $str;
        public $str2;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->str2 = " ";
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->str = "Pakshal Jain";
            $this->str2 = "Marvellous Infosystems";
        }

        //Behaviour of Class To Concatenate Two Strings 
        public function StrCatX()
        {
            $this->str = $this->str." ".$this->str2;
        }
    }
    
    //Main Function
    function main()
    {
        echo "Jay Ganesh...<br>";

        //Creating object of CopyString Class
        $cobj  = new Concatenation();

        //Call To Behaviours of Class
        $cobj->Accept();
        $cobj->StrCatX();

        //Printing Copied String 
        printf("Capital Letters From Copied String is : %s",$cobj->str);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call to Main Function
    main();
?>