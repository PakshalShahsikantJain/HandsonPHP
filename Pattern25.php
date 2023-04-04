<?php
    /*
	Author : Pakshal Shashikant Jain 
	Date : 01/04/2023
	Program : To Print Below Given Pattern

	Input : iRow = 6 iCol = 5 
	Output : * * * * *
			 * @ @ @ *
			 * @ @ @ *
			 * @ @ @ *
			 * @ @ @ *
			 * * * * * 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

        //Behaviour To Accpet Values
        public function Accept()
        {
            $this->No = 6;
            $this->No2 = 5;
        }

        //Behaviour To Display Given Pattern 
        public function Display()
        {
            $i = 0;
            $j = 0;
            
            //Logic To Print Below Given Pattern
            echo "Printing Below Given Pattern<br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if(($i == 1)||($j == 1)||($i == $this->No)||($j == $this->No2))
                    {
                        echo "&nbsp* &nbsp;&nbsp;&nbsp;";
                    }
                    else 
                    {
                        echo "&nbsp@&nbsp;&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh....<br>";
    
        //Creating object of pattern Class To Take Input From User
        $pobj = new Pattern();

        //Call To Behaviours of Class
        $pobj->Accept();
        $pobj->Display();
    }   

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>