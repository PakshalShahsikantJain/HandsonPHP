<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 18/07/2023
    Program : Accept N numbers from user and display all such numbers which contains
              3 digits in it.
              Input : N : 6
                      Elements : 8225 665 3 76 953 858
              Output : 665 953 858
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Digits 
    {
        //Characteristics of Class
        public $isize;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
        }

        //Behaviour of Class To Take Input from 
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(8225,665,3,76,953,858);
        }

        //Behaviour of Class To Display 
        public function Display()
        {
            $i = 0;
            $digits = 0;
            $No = 0;
            $icnt = 0;

            //Logic 
            echo "Printing All Such Elements Which Contains 3 Digits in it <br>";
            for($i = 0;$i < $this->isize;$i++)
            {
                $No = $this->arr[$i];

                while($No != 0)
                {
                    $digits = $No % 10;
                    $icnt = $icnt + 1;
                    $No = floor($No / 10);
                }

                if($icnt == 3)
                {
                    echo $this->arr[$i],"&nbsp;";
                }
                $icnt = 0;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        echo "Jay Ganesh....<br>";

        //Creating object Of Digits
        $dobj = new Digits();

        //Call To behaviours of Class
        $dobj->Accept();
        $dobj->Display();
    }

    //Call To Main function
    main();
?>