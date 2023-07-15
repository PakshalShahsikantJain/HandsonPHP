<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 15/07/2023
        Program : Accept N numbers from user and return product of all odd elements.
                Input : N : 6
                        Elements : 15 66 3 70 10 88
                        Output : 45
                Input : N : 6
                        Elements : 44 66 72 70 10 88
                        Output : 0
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Product
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

        //Behaviour of Class To Take Input From user
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(44,66,72,70,10,88);
        }   

        //Behaviour of Class To Calculate product 
        public function product()
        {
            $imult = 1;

            if($this->isize < 0)
            {
                $this->isize = -$this->isize;
            }

            //Logic To Calculate Product
            for($i = 0;$i < $this->isize;$i++)
            {
                if(($this->arr[$i] % 2) != 0)
                {
                    $imult = $imult * $this->arr[$i];                    
                }
            }

            if($imult == 1)
            {
                $imult = 0;
            }

            return $imult;
        }
    }//End of Class

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating object of Product
        $pobj = new Product();

        //Call To Behaviours of Class
        $pobj->Accept();
        $iret = $pobj->product();

        //Printing Product of Odd Elements Which are In Entered Range
        echo "Product of Entered Odd Elements is : ",$iret;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>