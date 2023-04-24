<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 20/04/2023
    Program : Design application for hotel. According to the management
              team of hotel they are giving discount on total bill amount of
              customer.
              If bill bill amount is less than 500 then there is no discount , if
              bill amount is less than 1500 and more than 500 they give 10%
              discount.
              And if the bill amount is more than 1500 then they give 15%
              discount.
              Our application should accept total bill amount and depends on
              the discount policy we have to return the amount after applying
              discount.

              Input : 1200 Output : 1080
              Input : 290 Output : 290
              Input : 3700 Output : 3145 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Hotel
    {
        //Characteristics of Class
        public $No = 0;

        //Constructor of Class
        public function __construct()
        {
            $this->No = 0;
        }

        //Behaviour of Class To Accept Input 
        function Accept()
        {
            $this->No = 560; 

            return $this->No;
        }

        //Behaviour of Class To Calculate Discount 
        function Calculate()
        {
            $Discount = 0;
            $final = 0;

            //Logic To Calculate Discount 
            if($this->No < 500)
            {
                return $this->No;
            }
            else if(($this->No >= 500)&&($this->No <= 1500))
            {
                $Discount = ($this->No * 10) / 100;
                $final = $this->No - $Discount;
    
                return $final;
            }
            else if($this->No > 1500)
            {
                $Discount = ($this->No * 15) / 100;
                $final = $this->No - $Discount;

                return $final;
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;
        $iret2 = 0;

        echo "Ganapati Bappa Morya <br>";
        echo "-------------Welcome To TCS Hotel------------------<br>";

        //Creating object of Hotel Class
        $hobj = new Hotel();

        //Calls To Behaviour of Class
        $iret = $hobj->Accept();
        $iret2 = $hobj->Calculate();

        //Printing Output According to Given Conditions 
        if($iret < 500)
        {
            echo "Your Final Bill Amount According To Our Hotel Policy is : ",$iret,"₹";
        }
        else if(($iret >= 500)&&($iret <= 1500))
        {
            echo "You Final Bill Amount After Getting 10% Discount is : ",$iret2,"₹";
        }
        else if($iret > 1500)
        {
            echo "You Final Bill Amount After Getting 15% Discount is : ",$iret2,"₹";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    main();
?>