<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 24/06/2023
    Program : Accept N numbers from user and display all such elements which are
              multiples of 11.

              Input : N : 6
                      Elements : 85 66 3 55 93 88
                
              Output : 66 55 88 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Display 
    {
        //Characteristics of Class
        public $isize;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = null;
        }

        //Behaviour of Class Setter 
        public function accept()
        {
            $this->isize = 6;
                
            $this->arr = array(85,66,3,55,93,88);
        }

        //Behaviour of Class To Display Elements Which are Multiples of 11
        public function display()
        {
            $i = 0;
            
            //Logic
            for($i = 0;$i < $this->isize;$i++)
            {
                if(($this->arr[$i] % 11) == 0)
                {
                    echo $this->arr[$i],"&nbsp;&nbsp";
                }
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo "Jay Ganesh....<br>";

        //Creating Object of Display Class
        $dobj = new Display();

        //Call To Behaviours of Class
        $dobj->accept();
        $dobj->display();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>