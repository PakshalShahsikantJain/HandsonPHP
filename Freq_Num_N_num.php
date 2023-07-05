<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 04/07/2023
        Program : Accept N numbers from user and return frequency of 11 form it.
                Input : N : 6
                        Elements : 85 66 3 15 93 88
                Output : 0

                Input : N : 6
                        Elements : 85 11 3 15 11 111
                Output : 2
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Freq
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

        //Function To Initialize Input to variables
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,11,88,11,12);
        }

        //Function To Calcualate Frequency of 11 in Entered N Numbers
        public function Calculate()
        {
            $i = 0;
            $icnt = 0;

            //Logic To Calculate Frequency  
            for($i = 0;$i < $this->isize;$i++)
            {
                if($this->arr[$i] == 11)
                {   
                    $icnt = $icnt + 1;
                }
            }

            return $icnt;
        }
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        //Creating object of Freq Class
        $fobj = new Freq();

        //Call To Behaviours of Class
        $fobj->Accept();
        $iret = $fobj->Calculate();

        //Priting Frequency Calculated
        echo "Frequency of 11 Number in Entered Elements is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>
