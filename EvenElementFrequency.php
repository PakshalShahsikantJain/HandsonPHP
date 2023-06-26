<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 26/06/2023
    Program : Accept N numbers from user and return frequency of even numbers.
              Input : N : 6
                      Elements : 85 66 3 80 93 88
              Output : 3 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Frequency
    {
        //Characteristics of Class
        public $isize;
        public $arr;
        
        //Constructor of Class
        function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
        }

        //Behaviour of Class To Take Input 
        function Accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,80,93,88);
        }

        //Behaviour of Class To Calculate Frequency
        function Count()
        {
            $i = 0;
            $icnt = 0;
            
            //Logic To Calculate Frequency 
            for($i = 0;$i < $this->isize;$i++)
            {
                if(($this->arr[$i] % 2) == 0)
                {
                    $icnt = $icnt + 1; 
                }
            }

            return $icnt;
        }
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;
        
        echo "Jay Ganesh....<br>";
    
        //Creating object of Frequency 
        $fobj = new Frequency();

        //Call To Behaviours of Class
        $fobj->Accept();
        $iret = $fobj->Count();

        //Printing Frequency Calculated
        echo "Frequency of Even Elements From Enetered N Number is : ",$iret;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>