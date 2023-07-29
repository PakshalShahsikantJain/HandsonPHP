<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 30/07/2023
        Program : Accept Character from user and check whether it is small case or
                not (a-z).

                Input : g
                Output : TRUE

                Input : D
                Output : FALSE 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    class Character
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
            $this->ch = 'A';
        }

        //Behaviour of Class To Check
        public function Check()
        {
            //Logic
            if(($this->ch >= 'a')&&($this->ch <= 'z'))
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
            printf("Entered Character %s is Small Case Character",$cobj->ch);
        }
        else
        {
            printf("Entered Character %s is not Small Case Character",$cobj->ch);
        }
    } 

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>