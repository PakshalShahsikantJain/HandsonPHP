<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 23/08/2023
        Program : Write a program which accept string from user and copy the
                contents of that string into another string. (Implement strcpy() function)
                
                Input : “Marvellous Multi OS”
                Output : “Marvellous Multi OS” in another string 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class CopyString 
    {
        //Characteristics of Class
        public $src;
        public $dest;
        public $str;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->src = [];
            $this->dest = [];
        }

        //Behaviour of Class to Accept Input 
        public function Accept()
        {
            $this->str = "Marvellous Multi OS BY Piyush Sir";
            $this->src = str_split($this->str);
        }

        //Behaviour of Class To Copy One String into Another String 
        public function StrCpyX()   
        {
            $i = 0;

            //Logic To Copy String
            while($i != sizeof($this->src)) 
            {
                $this->dest[$i] = $this->src[$i];
                $i++; 
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
       echo "Jay Ganesh...<br>";
        
       //Creating object of CopyString Class
       $cobj = new CopyString();

       //Call To Behaviours of Class
       $cobj->Accept();
       $cobj->StrCpyX();

       //Printing Copied String
       printf("Second String After Copying Contents of First String is : %s",implode($cobj->dest));   
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>