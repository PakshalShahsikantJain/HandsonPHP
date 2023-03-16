<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 16/03/2023
        Program : To Print Below Given Pattern 
        Input : iRow = 4 iCol = 4
        Output : 2 4 6 8 10
                1 3 5 7 9
                2 4 6 8 10
                1 3 5 7 9 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////

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

        //Functio To Display Pattern 
        public function Display() 
        {
            $i = 0;
            $j = 0;
            $k = 1;
            $j = 1;
            $no = 0;

            //Logic To Print Pattern
            for($i = 0;$i < $this->No;$i++)
            {
                for($j = 0;$j < $this->No2;$j++)
                {
                    if($i % 2 == 0)
                    {
                        $no = $k * 2;
                        echo $no,"\t";
                        $k = $k + 1;
                    } 
                    else 
                    {
                        echo $l,"\t";
                        $l = $l + 2;
                    }
                }
                $k = 1;
                $l = 1;
                echo "<br>";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 4;
        $No2 = 5;

        echo "Jay Ganesh...<br>";

        //Creating object of Pattern Class
        $pobj = new Pattern($No,$No2);

        //Call To Display Function
        $pobj->Display();
    }

    //Call To Main Function
    main();
?>