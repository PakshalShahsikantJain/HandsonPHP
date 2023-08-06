<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 04/08/2023
    Program : Accept character from user. If it is capital then display all the
              characters from the input characters till Z. If input character is small
              then print all the characters in reverse order till a. In other cases
              return directly.

              Input : Q
              Output : Q R S T U V W X Y Z

              Input : m
              Output : m l k j i h g f e d c b a

              Input : 8
              Output : 
    */

    //Class Declaration
    class Alphabets
    {
        //Characteristics of Class
        public $ch; 
        
        //Constructor of Class
        public function __construct()
        {
            $this->ch = ' ';
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->ch = 'g';
        }

        //Behaviour of Class To Display Alphabets
        public function Display()
        {
            $i = 0; 

            //Logic To Print Alphabets According To Given Conditions
            if(($this->ch >= 'A')&&($this->ch <= 'Z'))
            {
                for($i = ord($this->ch);$i <= ord('Z');$i++)
                {
                    printf("%s ",chr($i));
                }
            }
            else if(($this->ch >= 'a')&&($this->ch <= 'z'))
            {
                for($i = ord($this->ch);$i >= ord('a');$i--)
                {
                    printf("%s ",chr($i));
                }
            }
            else
            {
                return;
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        echo "Jay Ganesh.....<br>";
        
        //Creating object of Alphabets Class
        $aobj = new Alphabets();

        //Call TO Behaviour of Class
        $aobj->Accept();
        $aobj->Display();
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>