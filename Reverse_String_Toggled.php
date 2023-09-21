<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 18/09/2023
    Program : Accept sing from user and reverse the contents of that string by
                toggling the case.

                Input : "aCBdef"
                Output : "FEDcbA" 
    */

    //Class Declaration
    class StringRevTog
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

        //Behaivour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Pakshal";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Reverse String After Toggling Case
        public function StrRevTogX()
        {
            $first = 0;
            $last = 0;
            $temp = ' ';
            $ascii = 0;

            //Logic To Reverse String After Toggling Case
            while($last != sizeof($this->arr))
            {
                $last++;
            }
            $last--;
            
            while($first <= $last)
            {
                if(($this->arr[$first] >= 'A')&&($this->arr[$first] <= 'Z'))
                {
                    $ascii = ord($this->arr[$first]) + 32;
                    $this->arr[$first] = chr($ascii);
                }
                else if(($this->arr[$first] >= 'a')&&($this->arr[$first] <= 'z'))
                {
                    $ascii = ord($this->arr[$first]) - 32;
                    $this->arr[$first] = chr($ascii);
                }

                if($last != $first)
                {
                    if(($this->arr[$last] >= 'A')&&($this->arr[$last] <= 'Z'))
                    {
                        $ascii = ord($this->arr[$last]) + 32;
                        $this->arr[$last] = chr($ascii);
                    }
                    else if(($this->arr[$last] >= 'a')&&($this->arr[$last] <= 'z'))
                    {
                        $ascii = ord($this->arr[$last]) - 32;
                        $this->arr[$last] = chr($ascii);
                    }    
                }

                $temp = $this->arr[$first];
                $this->arr[$first] = $this->arr[$last];
                $this->arr[$last] = $temp;

                $first++;
                $last--;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh....<br>";
    
        //Creating object of StringRevTog Class
        $sobj = new StringRevTog();
        //Call To behaviours of Class
        $sobj->Accept();
        $sobj->StrRevTogX();

        //Printing Modified String
        printf("Reversed String is : %s",implode($sobj->arr));
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>