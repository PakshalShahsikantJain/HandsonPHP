<?php
    /*
    Author : Pakshal Shashikant Jain
    Date : 13/04/2023
    Program : To Print Below Given Pattern
    Input : iRow = 6 iCol = 6
    Output : * * * * * *
             *       * *
             *     *   *
             *   *     *
             * *       *
             * * * * * * 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    Class Pattern 
    {
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct()
        {
            $this->No = 0;
            $this->No2 = 0;
        }

        //Behaviour of Class To Take input From User
        public function Accept()
        {
            $this->No = 6;
            $this->No2 = 6;
        }

        //Behaviour of Class To Display Given Pattern 
        public function Display()
        {
            $i = 0;
            $j = 0;
            
            //Logic To Print Given Pattern 
            echo "Printing Below Given Pattern <br>";
            for($i = $this->No;$i > 0;$i--)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if(($i == $j)||($i == 1)||($j == 1)||($i == $this->No)||($j == $this->No2))
                    {
                        echo "*&nbsp;&nbsp;&nbsp";
                    }
                    else 
                    {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                    }
                }
                echo "<br>";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh...<br>";

        //Creating object of Pattern Class
        $pobj = new Pattern();

        //Calls To Behaviour of Class
        $pobj->Accept();
        $pobj->Display();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>