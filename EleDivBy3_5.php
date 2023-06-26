<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 23/06/2023
    Program : Accept N numbers from user and display all such elements which are
              divisible by 3 and 5.
              
              Input :  N : 6
                       Elements : 85 66 3 15 93 88
              
              Output : 15 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Display 
    {
        //Charactristics of Class
        public $isize;
        public $arr;
        public $i;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
            $this->i = 0;
        }
        
        //Behaviour of Classs To accept Input 
        public function accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,15,93,88);
        }

        #Behaviour of Class To Display Elements Divisible By 3 and 5
        public function display()
        {
            echo "Priting Elements Which are Divisible By 3 and 5 <br>";
            for($this->i = 0;$this->i < $this->isize;$this->i++)
            {
                if((($this->arr[$this->i] % 3) == 0)&&(($this->arr[$this->i] % 5) == 0))
                {
                    echo $this->arr[$this->i],"&nbsp;&nbsp";
                }
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh....<br>";

        //Creating object of Display Class
        $dobj = new Display();

        //Call To Behaviour of Class
        $dobj->accept();
        $dobj->display();
    }

    //Call To Main Function
    main();
?>