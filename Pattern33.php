<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 09/04/2023
    Program : To Print Below Given Pattern 
    Input : iRow = 4 iCol = 4
    Output : * * * #
             * * # @
             * # @ @
             # @ @ @ 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Pattern 
    {
        //Characteristics of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct() 
        {
            $this->No = 0;
            $this->No2 = 0;
        }

        //Behaviour of Class To Accpet input 
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

            //Logic To Print Pattern 
            echo "Printing Below Given Pattern : <br>";
            for($i = $this->No;$i > 0;$i--)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if($i == $j)
                    {
                        echo "#&nbsp;&nbsp;&nbsp;";
                    }
                    else if($i > $j)
                    {
                        echo "*&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    else 
                    {
                        echo "@&nbsp;&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    main();
?>
