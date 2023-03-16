<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 16/03/2023
        Program : To Print Below Given Pattern 

        Input : iRow = 4 iCol = 4
        Output : 1 2 3 4
                 5 6 7 8
                 9 1 2 3
                 4 5 6 7 

    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Pattern 
    {
        //Characteristics of Class
        public $No = 0;
        public $No2 = 0;

        //Constrcuctor of Class
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
            $k = 1;

            //Logic To Print Given Pattern 
            echo "Printing Below Given Pattern<br>";
            for($i = 0;$i < $this->No;$i++)
            {   
                for($j = 0;$j < $this->No2;$j++)
                {
                    echo $k,"\t";
                    $k = $k + 1;

                    if($k > 9)
                    {
                        $k = 1;
                    }
                }
                echo "<br>";
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////

    //Main Function 
    function main()
    {
        $No = 4;
        $No2 = 4;

        echo "Jay Ganesh....<br>";
        
        //Creating Object of Pattern 
        $pobj = new Pattern($No,$No2);

        //Call To Behaviour of Class
        $pobj->Display();
    }

    ///////////////////////////////////////////////////////////////////////////////

    //Main Function 
    main();
?>