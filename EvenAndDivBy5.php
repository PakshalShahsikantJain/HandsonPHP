<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 12/06/2023

    Program : Accept N numbers from user and display all such elements which are even and divisible by 5.
              Input : N : 6
              Elements : 85 66 3 80 93 88
              Output : 80 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
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
            $this->arr = [];
        }

        //Behaviour of Class To Accpet Input From User
        public function accept()
        {
            $this->isize = 7;
            $this->arr = array(85,66,3,80,93,88,90);
        }
        
        //Behaviour of Class To Display Elements 
        public function display()
        {
            $i = 0;

            //Logic
            echo "Printing Elements Which are Even and Divisible By 5<br>";
            for($i = 0;$i < $this->isize;$i++)
            {
                if((($this->arr[$i] % 2) == 0)&&(($this->arr[$i] % 5) == 0))
                {
                    echo $this->arr[$i],"&nbsp;&nbsp;";
                }
            }
        }
    }//End of Class

    ////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        echo " Jay Ganesh...<br>";

        //Creating object of Display Class
        $dobj = new Display();
        
        //Call To Behaviours of Class
        $dobj->accept();
        $dobj->display();
    
        //Deallcating Memory of Object 
        $dobj = null;
    }

    /////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>