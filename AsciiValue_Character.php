<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 06/08/2023
        Program : Accept character from user and display its ASCII value in decimal,
                octal and hexadecimal format.
                
                Input : A
                Output : Decimal 65
                        Octal 0101
                        Hexadecimal 0X41
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class AsciiValue
    {
        //Characteristics of Class
        public $ch;

        //Constructor of Class
        public function __construct()
        {
            $this->ch = ' ';
        }

        //Behaviour of Class To Accept Input 
        public function Accept()
        {
            $this->ch = 'a';
        }

        //Behaviour of Class To Display Ascii Values
        public function Display()
        {
            printf("Decimal Value : %d <br>",ord($this->ch));
            printf("Hexadecimal Value : 0X%X <br>",ord($this->ch));
            printf("Octal Value : 0o%o <br>",ord($this->ch));
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay ganesh....<br>";
        
        //Creating object of AsciiValue 
        $aobj = new AsciiValue();

        //Call To Behaviour of Class
        $aobj->Accept();
        $aobj->Display();
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function 
    main();
?>