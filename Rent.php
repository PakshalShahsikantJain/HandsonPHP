<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 05/06/2023
    Program : We have to design application for tourist company.
              Tourist company provides cars on rent.
              Depends on the running of car they apply rent.
              
              If running is less than 100 kilometres then they charge 25
              rupees per kilometre .
              
              And if running is more than 100 kilometres then they apply 15
              rupees per kilometre after 100 kilometres.
    
              We have to accept number of kilometres from user and return
              the estimated rent.
            
              Input : 73 Output : 1825
              Input : 132 Output : 2980
              Input : 189 Output : 3835  
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration 
    class Car
    {
        //Characteristics of Class
        public $No = 0;

        //Constructor of Class
        public function __construct()
        {
            $this->No = 0;
        }

        //Behaviour of Class To Take Input From User
        public function accept()
        {
            $this->No = 73;
        }

        //Behaviour of Class To Calculate Rent of Car According To Running
        public function Rent()
        {
            $rent = 0;
            
            //Logic To Calculate Car Rent
            if($this->No <= 100)
            {
                $rent = $this->No * 25;

                return $rent;
            }
            else
            {
                $rent = $this->No * 15;
                return $rent;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;

        echo "Jay Ganesh.....<br>";

        //Creating object of Car Class
        $cobj = new Car();

        //Call To Behaviours of Class
        $cobj->accept();

        $iret = $cobj->Rent();

        echo "------Marvellous Car Rental Services----------<br>";

        //Printing Car Rent Calculated
        echo "You Have To Pay Car Rent of : ",$iret;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>