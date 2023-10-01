<?php
    /*
        Author : Pakshal Shshikant Jain
        Date : 30/09/2023
        Program : Write a program which accept string from user and copy the
                contents into another string by removing extra white spaces.
                    
                Input : Marvellous        multi          OS”
                Output : Marvellous multi OS”

    */
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class StringCopy
    {
        //Characteristics of Class
        public $str;
        public $arr;
        public $brr;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
            $this->brr = [];
        }

        //Behaviour of Class To Accept Input from user
        public function Accept()
        {
            $this->str = "Marvellous            Multi                  OS";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Copy String After Removing White Spaces
        public function StrCpyX()
        {
            $i = 0;
            $j = 0;

            //Logic To Copy String According To Given Condition
            if(($this->arr == null)&&($this->brr == null))
            {   
                return;
            }

            while($i != sizeof($this->arr)) 
            {
                if($this->arr[$i] == ' ')
                {
                    while(($this->arr[$i] == 'a')&&($i != sizeof($this->arr)))
                    {
                        $i++;
                    }
                    $this->brr[$j] = ' ';
                    $j++;
                }

                $this->brr[$j] = $this->arr[$i];
                $i++;
                $j++;
            }
        }
    }//End of Class

    //Main Function
    function main()
    {
        echo "Jay Ganesh.....<br>";
        
        //Creating object of StringCopy Class
        $sobj = new StringCopy();

        //Call To Beahviours of Class
        $sobj->Accept();
        $sobj->StrCpyX();

        //Printing Copied String
        echo "Copied String is : ",implode($sobj->brr);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>