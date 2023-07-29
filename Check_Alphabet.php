<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 19/07/2023
    Prorgam : Accept Character from user and check whether it is alphabet or not
              (A-Z a-z).
              Input : F
              Output : TRUE
                
              Input : &
              Output : FALSE
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    Class Character
    {
        //Characteristics of Class
        public $ch;

        //Constructor of Class
        public function __construct()
        {
            $this->ch = ' ';
        } 

        //Behaviour of Class To Take Input from user
        public function accept()
        {
            $this->ch = '^';
        }

        //Behaviour of Class To Check
        public function Check()
        {
            //Logic
            if(($this->ch >= 'A')&&($this->ch <= 'Z')||($this->ch >= 'a')&&($this->ch <= 'z'))
            {
                return true;
            }
            else
            {
                return false;
            }

        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $bret = false;

        echo "Jay Ganesh....<br>";
        
        //Creating object Character Class
        $cobj = new Character();

        //Call To Behaviours of Class
        $cobj->Accept();
        $bret = $cobj->Check();

        //Handeling Conditions according to output
        if($bret == true)
        {
            printf("Entered Character %s is an Alphabet ",$cobj->ch);
        }
        else
        {
            printf("Entered Character %s is not an alphabet ",$cobj->ch);
        }
    } 

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>