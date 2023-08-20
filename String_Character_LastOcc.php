<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 20/08/2023
        Program : Write a program which accept string from user and accept one
                character. Return index of first occurrence of that character.
                Input : "Marvellous Multi OS"
                        'M'
                Output : 11
                
                Input : "Marvellous Multi OS"
                        'W'
                Output : -1

                Input : "Marvellous Multi OS"
                        'e'
                Output : 4  
    */
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class FindLast 
    {
        //Characteristics of Class
        public $str;
        public $arr;
        public $ch;

        //Constructor of Class
        public function __construct()
        {
            $this->str = " ";
            $this->arr = [];
            $this->ch = ' ';
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->str = "Marvellous Multi OS";
            $this->arr = str_split($this->str);
            $this->ch = 'S';
        }

        //Behaviour of Class To LastOccurance of Class
        public function LastOcc()
        {
            $i = 0;
            $ipos = -1;
            
            //Logic To Find Last Occurance of Entered Number
            while($i != sizeof($this->arr))
            {
                if($this->arr[$i] == $this->ch)
                {
                    $ipos = $i;                    
                }
                $i++;
            }

            return $ipos;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating object of FindLast Class
        $fobj = new FindLast();
        

        //Call To Behaviour of Class
        $fobj->Accept();
        $iret = $fobj->LastOcc();

        //Printing Last occurance of Entered Number
        printf("Last Occurance of Entered Character %s is at index Number : %d",$fobj->ch,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To main Function
    main();
?>