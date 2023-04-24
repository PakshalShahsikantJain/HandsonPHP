<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 08/04/2023
    Program : To Print Below Given Pattern 
    Input : iRow = 5 iCol = 5
    Output : 1 2 3 4 5
               2 3 4 5
                 3 4 5
                   4 5
                     5
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Pattern 
    {
        //Characteristic of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct()
        {
            $this->No = 0;
            $this->No2 = 0;
        }

        //Behaviour of Class To Take Input From User
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

            //Logic To Print Given Pattern 
            echo "Printing Below Given Pattern : <br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if($i <= $j)
                    {
                        echo $j,"&nbsp;&nbsp;&nbsp";
                    }
                    else 
                    {
                        echo " &nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                }
                echo"<br>";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Ganapati Bappa Morya...<br>";
        
        //Creating object of Pattern Class
        $pobj = new Pattern();

        //Calls To Behaviour of Class
        $pobj->Accept();
        $pobj->Display();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>