<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 16/07/2023
    Program : Accept N numbers from user and return the Smallest number.
              Input : N : 6
                      Elements : 85 66 3 66 93 88
              Output : 3 
    */

    //Class Declaration
    class Minimum
    {
        //Characteristics of Class
        public $isize;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $isize = 0;
            $arr = [];
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,66,93,88);
        }   

        //Behaviour of Class To Fin Minimum Elements From Entered N Numbers
        public function mini()
        {
            $imin = 0;

            //Logic
            $imin = $this->arr[0];
            for($i = 0;$i < $this->isize;$i++)
            {
                if($this->arr[$i] < $imin)
                {
                    $imin = $this->arr[$i];
                }
            }
            
            return $imin;
        }
    }

    //Main function 
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating object of Minimum Class
        $mobj = new Minimum();

        //Call To behaviours of Class
        $mobj->Accept();
        $iret = $mobj->mini();

        //Printing Smallest Element from Entered N numbers
        echo "Printing Minimum Element Which are in Entered N numbers ",$iret;
    }

    //Call To Main function
    main();
?>