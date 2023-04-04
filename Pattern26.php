<?php
    /*
	Author : Pakshal Shashikant Jain 
	Date : 02/04/2023
	Program : To Print Below Given Pattern

	Input : iRow = 6 iCol = 5 
	Output : 1 2 3 4
             1 * * 4
             1 * * 4
             1 2 3 4 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Pattern 
    {
        //Characteristics of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct($no,$no2)
        {
            $this->No = $no;
            $this->No2 = $no2;
        }
        
        //Behaviour of Class To Display Patttern
        public function Display()
        {
            $i = 0;
            $j = 0;
            
            //Logic To Print Pattern 
            echo "Printing Below Given Pattern : <br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if(($i == 1)||($j == 1)||($i == $this->No)||($j == $this->No2))
                    {
                        echo $j,"&nbsp;&nbsp;&nbsp;";
                    }
                    else 
                    {
                        echo "*&nbsp;&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 5;
        $No2 = 4;

        echo "Jay Ganesh...<br>";

        //Creating object of pattern Class
        $pobj = new Pattern($No,$No2);

        //Call To Behaviour of Class
        $pobj->Display();
    }

    ////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>