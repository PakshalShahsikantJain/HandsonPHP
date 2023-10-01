<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 26/09/2023
        Program : Write a program which accept string from user and reverse each
                word in place.
                
                Input : "Marvellous Multi OS
                Output : "suollevraM itluM SO" 
    */

    //Class Declaration
    class StringWordRev
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
            $this->str = "Marvellous Multi OS";
            $this->arr = str_split($this->str);
        }

        //Behaviour of Class To Reverse Each Word of String in Place
        public function StrWrdRev()
        {
            $i = 0;
            $j = 0;
            $first = 0;
            $last = 0;
            $temp = ' ';

            //Logic To Reverse
            while($last != sizeof($this->arr))
            {
                if($this->arr[$last] == ' ')
                {
                    while(($this->arr[$last] == ' ')&&($last != sizeof($this->arr)))
                    {
                        $last++;
                    }
                    $last--;
                }
                else
                {
                    $first = $last;
                    
                    while(($this->arr[$last] != ' ')&&($last != sizeof($this->arr) - 1))
                    {
                        $last++;
                    }

                    if($this->arr[$last] == ' ')
                    {
                        $last--;
                    }

                    $i = $first;
                    $j = $last;

                    while($i <= $j)
                    {
                        $temp = $this->arr[$i];
                        $this->arr[$i] = $this->arr[$j];
                        $this->arr[$j] = $temp;

                        $i++;
                        $j--;
                    }
                }
                $last++;
            }

        }
    }

    //Main Function
    function main()
    {
        echo "Jay Ganesh...<br>";

        //Creating Object of StringWordRev Class
        $sobj = new StringWordRev();

        //Call To Behaviours of Class
        $sobj->Accept();
        $sobj->StrWrdRev();

        //Printing String After Reversing Each Word
        echo "String After Reversing Each Word of String is : ",implode($sobj->arr);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>