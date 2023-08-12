<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 06/08/2023
    Program : Write a program which accept string from user and count number of
              capital characters.

              Input : “Marvellous Multi OS”
              Output : 4 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Capital
    {
        //Characteristics of Class
        public $str;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS";
            $this->arr = str_split($this->str);
        }   

        //Behaviour of Class To Count Capital Letters
        public function Count()
        {
            $i = 0;
            $icnt = 0;

            //Logic To Count Capital Letter 
            for($i = 0;$i < sizeof($this->arr);$i++)
            {
                if(($this->arr[$i] >= 'A')&&($this->arr[$i] <= 'Z'))
                {
                    $icnt++;
                }
            }

            return $icnt;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh.....<br>";

        //Creating object of Capital Class
        $cobj = new Capital();

        //Call To Behaviour of Class
        $cobj->Accept();
        $iret = $cobj->Count();

        //Printing Count of Capital Letters
        printf("Count of Capital Letter in Entered String (%s) is : %d",$cobj->str,$iret);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>