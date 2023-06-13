<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 07/06/2023
    Program :  Accept N numbers from user and return difference between summation
               of even elements and summation of odd elements.
               Input : N : 6
               Elements : 85 66 3 80 93 88
               Output : 53 (234 - 181) 
    */

    //Class Declaration
    class Difference
    {
        //Characateristics of Class
        private $isize;
        private $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = array();
        }

        //Behaviour of Class To Take Input From User
        public function accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,80,93,88);
        }   

        //Behaviour of Class To Calculate Difference 
        public function Diff()
        {
            $i = 0;
            $diff = 0;
            $SumEven = 0;
            $SumOdd = 0;

            //Logic To Calculate Difference 
            for($i = 0;$i < $this->isize;$i++)
            {
                if(($this->arr[$i] % 2) == 0)
                {
                    $SumEven = $SumEven + $this->arr[$i];
                }
                else 
                {
                    $SumOdd = $SumOdd + $this->arr[$i];
                }
            }

            $diff = $SumEven - $SumOdd;

            return $diff;
        }
    }

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        //Creating object of Differenc Class
        $dobj = new Difference();

        //Calls To Behaviours of Class
        $dobj->accept();
        $iret = $dobj->Diff();  

        //Printing Difference Caculated
        echo "Difference Between Summation of Even and odd Elements is : ",$iret;
    }

    //Call To Main Function
    main();
?>