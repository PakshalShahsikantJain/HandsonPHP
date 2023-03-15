<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 14/03/2023
        Program : To Print Below Given Pattern
            Input : iRow = 3 iCol = 5
            Output : A A A A A
                     B B B B B
                     C C C C C
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration 
    class Pattern 
    {
        //Characteristics of Class
        public $No = 0;
        public $No2 = 0;

        //Constructor of Class
        public function __Construct($no,$no2)
        {
            $this ->No = $no;
            $this ->No2 = $no2;
        }

        //Behaviour of Class
        public function Display()
        {
            $i = 0;
            $j = 0;

            echo "Printing Given Pattern<br>";
            for($i = 0;$i < $this->No;$i++)
            {
                for($j = 0;$j < $this->No2;$j++)
                {
                    echo chr($i + 65),"\t";
                }
                echo "<br>";
            }
        }
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 3;
        $No2 = 4;
        
        echo "Jay Ganesh....<br>";

        //Creating Object of Pattern Class
        $obj = new Pattern($No,$No2);

        //Call To Behaviour of Class
        $obj->Display();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>