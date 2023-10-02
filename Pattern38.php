<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 02/10/2023
        Program : Write a program which accept string from user and print below
                  pattern.

                  Input : "Marvellous"
                  Output : M a r v e l l o u s
                           M a r v e l l o u
                           M a r v e l l o
                           M a r v e l l
                           M a r v e l
                           M a r v e
                           M a r v
                           M a r
                           M a
                           M

                  Input : "PPA"
                  Output : P P A
                           P P
                           P 
    */
    
    ////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class StringPattern
    {
        //Characteristics of Class
        public $str;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->str = "Pakshal";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Display Given Patter
        public function Pattern()
        {
            $i = 0;
            $j = 0;

            if($this->arr == null)
            {
                return;
            }

            //Logic To Display Given Pattern
            for($i = sizeof($this->arr) - 1;$i >= 0;$i--)
            {
                for($j = 0;$j < sizeof($this->arr);$j++)
                {
                    if($i >= $j)
                    {
                        printf("%s &nbsp;&nbsp",$this->arr[$j]);
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
        echo "Jay Ganesh....<br>";

        //Creating object of String Pattern Class
        $sobj = new StringPattern();

        //Call To Behaviours of Class
        $sobj->Accept();
        $sobj->Pattern();
    }

    ///////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>