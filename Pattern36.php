<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 19/04/2023
    Program : To Print Below Given Pattern 
    
    Input : iRow = 4 iCol = 4
    Output : 1 2 3 4 5
             1 2     5
             1   3   5
             1     4 5
             1 2 3 4 5 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
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

        //Behaviour of Class To Take input From User
        public function Accept()
        {
            $this->No = 6;
            $this->No2 = 6;
        }

        //Behaviour of Class To Take Input From User
        public function Display()
        {
            $i = 0;
            $j = 0;
            
            //Logic To Print Given Pattern 
            echo "Printing Below Given Pattern : <br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if(($i == $j)||($i == 1)||($j == 1)||($i == $this->No)||($j == $this->No2))
                    {
                        echo "$j &nbsp;&nbsp;&nbsp";
                    }
                    else 
                    {
                        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                    }
                }
                echo "<br>";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh...<br>";
        
        //Creating object of Pattern Class
        $pobj = new Pattern();

        //
        $pobj->Accept();
        $pobj->Display();
    }

    //Main Function
    main();
?>