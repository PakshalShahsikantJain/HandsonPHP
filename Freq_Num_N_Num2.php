<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 05/07/2023
    Program : Accept N numbers from user and accept one another number as NO return frequency of NO form it.
              Input : N : 6
                      NO: 66
                      Elements : 85 66 3 66 93 88
              Output : 2

              Input : N : 6
                      NO: 12
                      Elements : 85 11 3 15 11 111
              Output : 0 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    Class Num
    {
        //Characteristics of Class
        public $isize;
        public $arr;
        public $NO;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
            $this->NO = 0;
        }

        //Behaviour of Class To Take Input from user
        public function accept()
        {
            $this->isize = 6;
            $this->arr = array(85,45,12,63,89,45);
            $this->NO = 45;
        }

        //Behaviour of Class Count Frequency 
        public function count()
        {
            $icnt = 0;
            $i = 0;

            for($i = 0;$i < $this->isize;$i++)
            {
                if($this->arr[$i] == $this->NO)
                {
                    $icnt = $icnt + 1;
                }
            }

            return $icnt;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating Object of Num Class
        $nobj = new Num();  

        //Call To Behaviours of Class
        $nobj->accept();
        $iret = $nobj->count();

        //Printing Frequency Calculated
        echo "Frequency of Entered Number in Entered N Number is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>
