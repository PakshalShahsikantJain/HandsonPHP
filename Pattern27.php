<?php
    /* 
        Author : Pakshal Shashikant Jain 
        Date : 06/04/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 4 iCol = 4
        Output : *
                * *
                * * *
                * * * *
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declration
    Class Pattern 
    {
        //Charactersitics of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __construct($no,$no2)
        {
            $this->No = $no;
            $this->No2 = $no2;
        }

        //Behaviour of Class
        public function Display()
        {
            $i = 0;
            $j = 0;
            
            //Logic To Print Pattern Given
            echo "Printing Below Given Pattern :<br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if($i >= $j)
                    {
                        echo "* &nbsp;&nbsp";
                    }
                    else 
                    {
                        echo " &nbsp;&nbsp";
                    }
                }
                echo "<br>";
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh....<br>";

        //Creating object of Pattern Class
        $pobj = new Pattern($No,$No2);
    
        //Call To Behaviour of Class
        $pobj->Display();
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>