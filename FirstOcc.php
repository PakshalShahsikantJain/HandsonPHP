<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 07/07/2023
        Program : Accept N numbers from user and accept one another number as NO ,
                    return index of first occurrence of that NO.

        Input : N : 6
                NO: 66
                Elements : 85 66 3 66 93 88
        Output : 1

        Input : N : 6
                NO: 12
                Elements : 85 11 3 15 11 111
        Output : 0 
    */
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Occ
    {
        //Characterstics of Class
        public $NO;
        public $isize;
        public $arr;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->NO = 0;
            $this->arr = [];
        }

        //Behaviour of Class To Take Input From user
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,12,86,93);
            $this->NO = 12;
        }

        //Behaviour of Class To Find Occurance
        public function Find()
        {
            $i = 0;

            //Logic 
            for($i = 0;$i < $this->isize;$i++)
            {
                if($this->arr[$i] == $this->NO)
                {
                    break;
                }
            }

            if($this->arr[$i] == $this->NO)
            {
                return $i;
            }
            else
            {
                return -1;
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        //Creating Object of Occurance Class
        $obj = new Occ();

        //Call To Behaviour of Class
        $obj->Accept();
        $iret = $obj->Find();

        //Printing First Occurance Found 
        printf("Number %d is Present at Index Number %d",$obj->NO,$iret);
    }

    //////////////////////////////////////////////////////////////////////////////////

    //Call To main function
    main(); 
?>