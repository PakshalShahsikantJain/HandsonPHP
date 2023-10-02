<?php   
    /*
        Author : Pakshal Shashikant Jain
        Date : 02/10/2023
        Program : Write a program which accept string from user and print below
                pattern.

                Input : "Marvellous"
                Output : M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                         M a r v e l l o u s
                
                Input : "PPA"
                Output : P P A
                         P P A
                         P P A 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Pattern
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
            $this->str = "PPA";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Display Given Pattern
        public function Display()
        {
            $i = 0;
            $j = 0;

            //Printing Given Pattern
            echo "Printing Given Pattern : <br>";
            for($i = 0;$i < sizeof($this->arr);$i++) 
            {
                for($j = 0;$j < sizeof($this->arr);$j++)
                {
                    printf("%s &nbsp;&nbsp;&nbsp",$this->arr[$j]);
                }
                echo "<br>";
            }
        }
    }//End of Class

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh.....<br>";
        
        //Creating object of Pattern Class
        $sobj = new Pattern();

        //Call To Behaviours of Class
        $sobj->Accept();
        $sobj->Display();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>