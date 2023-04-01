<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 29/03/2023
    Program : To Print Below Given Pattern

    Input : iRow = 5 iCol = 5 
    Output : $ * * * *
             * $ * * *
             * * $ * *
             * * * $ *
             * * * * $
    */

    ////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Pattern 
    {
        //Characateristics of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct() 
        {
            $this->No = 0;
            $this->No2 = 0;
        }

        //Behaviour of Class
        public function Accept()
        {
            $this->No = 5;
            $this->No2 = 5;
        }

        //Behaviour of Class To Display Given Pattern
        public function Display()
        {
            $i = 0;
            $j = 0;

            echo "Printing Below Given Pattern : <br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if($i == $j)
                    {
                        echo "$ &nbsp;&nbsp;&nbsp;";
                    }
                    else 
                    {
                        echo "* &nbsp;&nbsp;&nbsp;";
                    }
                }
                echo"<br>";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh...<br>";

        //Creating object of Pattern Class
        $pobj = new Pattern();

        //Call To Behaviour of Class
        $pobj->Accept();
        $pobj->Display();
    }

    //////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>
