<?php
    //Class Declaration
    class Range
    {
        //Characteristics of Class
        public $start;
        public $arr;
        public $isize;
        public $end;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
            $this->start = 0;
            $this->end = 0;
        }

        //Behaviour of Class To Take Input From user
        public function accept()
        {
            $this->isize = 6;
            $this->arr = array(85,3,72,99,63,14);
            $this->start = 50;
            $this->end = 90;
        }

        //Behaviour of Class To Display 
        public function Display()
        {
            $i = 0;
            $brr = [];

            for($i = 0;$i < $this->isize;$i++)
            {
                if(($this->arr[$i] >= $this->start)&&($this->arr[$i] <= $this->end))
                {
                    $brr[$i] = $this->arr[$i];
                }
            }

            return $brr;
        }

    }

    //Main function
    function main()
    {
        $iret = [];
        $i = 0;

        echo "Jay Ganesh.....<br>";

        //Creating Object of Range Class
        $robj = new Range();

        //Call To Behaviours of Class
        $robj->Accept();
        $iret = $robj->Display();

        //Printing Elements Which are in Entered Range
        printf("Printing Elements Which are in Range %d and %d Numbers<br>",$robj->start,$robj->end);
        for($i = 0;$i < $robj->isize;$i++)
        {
            if(isset($iret[$i]))
            {
                echo $iret[$i],"&nbsp;&nbsp";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main function
    main();
?>