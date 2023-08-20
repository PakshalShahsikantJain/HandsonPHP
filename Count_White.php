<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 16/08/2023
        Program : Write a program which accept string from user and count number of
                white spaces
        
                Input : “MarvellouS”
                Output : 0
        
                Input : “MarvellouS Infosystems”
                Output : 1
                
                Input : “MarvellouS Infosystems by Piyush Manohar Khairnnar”
                Output : 5
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class CountWhite
    {
        //Characteristics of Class
        public $str;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
        }
        
        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS By Piyush Khairnar";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class to Count White Spaces
        public function Count()
        {
            $icnt = 0;
            $i = 0;
            
            //Logic To Count
            while($i != sizeof($this->arr))
            {
                if($this->arr[$i] == ' ')
                {
                    $icnt++;
                }
                $i++;
            }

            return $icnt;
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating object of CountWhite Class
        $cobj = new CountWhite();

        //Call To Behaviour of Class 
        $cobj->Accept();
        $iret = $cobj->Count();

        //Printing Count Calculated
        echo "Count of White Spaces in Entered String is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>