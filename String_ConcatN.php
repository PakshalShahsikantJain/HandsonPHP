<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 13/09/2023
        Program : Write a program which accepts 2 strings from user and concat N
                    characters of second string after first string.Value of N should be
                    accepted from user. (Implement strncat() function).

                    Note : If third parameter is greater than the size of second string then
                    concat whole string after first string.

                    Input : "Marvellous Infosystems"
                            "Logic Building"
                            5
                    Output : "Marvellous Infosystems Logic"
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class StringCat
    {
        //Characteristics of Class
        public $icnt;
        public $str;
        public $str2;
        public $arr;
        public $brr;

        //Constructor of Class
        public function __construct()
        {
            $this->icnt = 0;
            $this->str = " ";
            $this->str2 = " ";
            $this->arr = [];
            $this->brr = [];
        }

        //Behaviour of Class To Take input from user
        public function Accept()
        {
            $this->str = "Marvellous Infosystem";
            $this->str2 = "Logic Building";
            $this->arr = str_split($this->str);
            $this->brr = str_split($this->str2);
            $this->icnt = 4;
        }

        //Behaviour of Class To Concat Second String into First String Till Entered Size
        public function StrNCatX()
        {
            $i = 0;
            $j = 0;

            //Logic To Concatenate
            while($i != sizeof($this->arr))
            {
                $i++;
            }

            $this->arr[$i] = ' ';
            $i++;

            while(($j != sizeof($this->brr))&&($this->icnt != 0))
            {
                $this->arr[$i] = $this->brr[$j];
                $i++;
                $j++;
                $this->icnt--;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        echo "Jay Ganesh...<br>";
        
        //Creating object of StringCat Class
        $sobj = new StringCat();

        //Call To Beaviour of Class
        $sobj->Accept();
        $sobj->StrNCatX();

        //Printing Concatenated String
        echo "Concatenated String is : ",implode($sobj->arr);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>