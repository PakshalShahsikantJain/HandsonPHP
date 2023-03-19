<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 18/03/2023
        Program : To Print Below Given Pattern
        
        Input : iRow = 5 iCol = 5
        Output : a b c d e
                1 2 3 4 5
                a b c d e
                1 2 3 4 5
                a b c d e
    */
    
    /////////////////////////////////////////////////////////////////////////////////////////////////

    #Class Declaration
    class Pattern 
    {
        #Characteristics of Class
        public $No = 0;
        public $No2 = 0;

        #Constructor of Class
        public function __construct($no,$no2)
        {
            $this->No = $no;
            $this->No2 = $no2;
        }

        #Behaviour of Class
        public function Display()
        {
            $i = 0;
            $j = 0;

            #Logic To Print Below Given Pattern
            echo "Printing Below Given Pattern : <br>";
            for($i = 0;$i < $this->No;$i++)
            {
                for($j = 0;$j < $this->No2;$j++)
                {
                    if($i % 2 == 0)
                    {
                        echo chr($j + 97),"\t";
                    }
                    else 
                    {
                        echo $j + 1,"\t";
                    }
                }
                echo "<br>";
            }
        }
    }//End of Class

    /////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 5;
        $No2 = 5;

        echo "Jay Ganesh....<br>";
        
        //Creating object of Pattern Class
        $pobj = new Pattern($No,$No2);

        //Call To Display Function
        $pobj->Display();
    }

    //Call To main Function
    main();
?>