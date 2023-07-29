<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 24/07/2023
        Program : Accept Character from user and check whether it is digit or not
                (0-9).

                Input : 7 
                Output : TRUE

                Input : d
                Output : FALSE 
    */

    //Class Declaration
    class Digit 
    {
        //Characteristics of Class
        public $ch;

        //Constructor of Class
        public function __construct()
        {
            $this->ch = ' ';
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->ch = '5';
        }

        //Behaviour of Class To Check Entered Character is Digit or Not
        public function Check()
        {
            if(($this->ch >= '0')&&($this->ch <= '9'))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    //Main function
    function main()
    {
        $bret = false;

        echo "Jay Ganesh....<br>";

        //Creating object of Digit Class 
        $bobj = new Digit();

        //Call To Behaviour of Class
        $bobj->Accept();

        $bret = $bobj->Check();

        //Handeling Condition according To Output 
        if($bret == true)
        {
            printf("Entered Character %s is A Digit",$bobj->ch);
        }
        else
        {
            printf("Entered Character %s is Not A Digit",$bobj->ch);
        }
    }

    main();
?>