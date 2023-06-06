<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 04/06/2023
        Program : Design application for school management system.
                As school is primary there are 4 standards from 1 to 4.
                School fees of each standard is different.
                For first standard fees are 8900, for second standard 12790, for
                third standard 21000 and for fourth standard fees are 23450.
                We have to accept standard from user and display the
                corresponding fees. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class School
    {
        //Characteristics of Class
        public $No = 0;
        
        //Constructor of Class
        public function __constrcut()
        {
            $this->No = 0;
        }

        //Behaviour of Class
        public function accept()
        {
            $this->No = 1;
        }

        //Behaviour of Class
        public function Fees()
        {
            $Fee = 0;
            
            //Logic To Display Fees According To Output 
            switch ($this->No)
            {
                case 1 :
                    $Fee = 8900;
                    return $Fee;
                case 2 :
                    $Fee = 12790;
                    return $Fee;
                case 3 :
                    $Fee = 21000;
                    return $Fee;
                case 4 :
                    $Fee = 23450;
                    return $Fee;
                default :
                    echo "Invalid Input";
                    exit(0);
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        echo "-----Marvellous Internation Primary School-----<br>";
        
        //Creating object of School Class
        $sobj = new School();

        //Call To Behaviours of Class
        $sobj->accept();
        $iret = $sobj->Fees();

        //Printing Output According To Standard
        echo "Your Fees is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>