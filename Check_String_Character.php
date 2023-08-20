<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 19/08/2023
        Program : Write a program which accept string from user and accept one
                character. Check whether that character is present in string or not.
                Input : "Marvellous Multi OS"
                        e
                Output : TRUE
                
                Input : "Marvellous Multi OS"
                        W
                Output : FALSE 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Character 
    {
        //Characteristics of Class
        public $arr;
        public $str;
        public $ch;

        //Constructor of Class
        public function __construct()
        {
            $this->arr = [];
            $this->str = " ";
            $this->ch = ' ';
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS";
            $this->arr = str_split($this->str);
            $this->ch = 'W';
        }

        //Behaviour of Class To Check Entered Character is Present or not in String
        public function Check()
        {
            $i = 0;

            //Logic To Check
            while($i != sizeof($this->arr) - 1)
            {
                if($this->arr[$i] == $this->ch)
                {
                    break;
                }

                $i++;
            }

            if($this->arr[$i] == $this->ch)
            {
                return true;
            }
            else
            {
                return false;
            }

        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $bret = false;

        echo "Jay Ganesh....<br>";

        //Creating object of Character Class
        $cobj = new Character();

        //Call To Behaviour of Class
        $cobj->Accept();

        $bret = $cobj->Check();

        //Handeling Condition if bret = true
        if($bret == true)
        {
            printf("Entered Character %s is Present in String",$cobj->ch);
        }
        else   //Handeling Condition if bret = false
        {
            printf("Entered Character %s is Not Present in String",$cobj->ch);
        }
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //call To main function
    main();
?>