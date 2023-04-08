<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 07/04/2023
    Program : To Print Below Given Pattern 
    Input : iRow = 5 iCol = 5
    Output : $ * * * *
             # $ * * *
             # # $ * *
             # # # $ *
             # # # # $
    */
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Display 
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
        
        //Behaviour of Class
        public function Pattern() 
        {
            $i = 0;
            $j = 0;

            //Logic To Print Given Pattern 
            echo "Printing Below Given Pattern : <br>";
            for($i = 1;$i <= $this->No;$i++)
            {
                for($j = 1;$j <= $this->No2;$j++)
                {
                    if($i == $j)
                    {
                        echo "$ &nbsp;&nbsp;";
                    }
                    else if($i > $j)
                    {
                        echo "# &nbsp;&nbsp;";
                    }
                    else 
                    {
                        echo "* &nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5;
        $No2 = 5;

        echo "Jay Ganesh...<br>";
        
        //Creating object of Display Class
        $dobj = new Display($No,$No2);

        //Call To Behaviour of Class
        $dobj->Pattern();
    }   

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>