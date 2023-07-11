<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 11/07/2023
    Program : Accept N numbers from user and accept one another number as NO ,
              return index of last occurrence of that NO.

              Input : N : 6
                      NO: 66
                      Elements : 85 66 3 66 93 88
              Output : 3

              Input : N : 6
                      NO: 93
                      Elements : 85 66 3 66 93 88
              Output : 4
            
              Input : N : 6
                      NO: 12
                      Elements : 85 11 3 15 11 111
              Output : -1 
    */

    //Class Declaration
    class Occurance
    {
        //Characteristics of Class
        public $NO;
        public $isize;
        public $arr;
        
        //Constructor of Class
        public function __construct()
        {
            $this->NO = 0;
            $this->isize = 0;
            $this->arr = [];
        }

        //Behavoiour of Class To Take Input From user
        public function accept()
        {
            $this->NO = 66;
            $this->isize = 6;
            $this->arr = array(85,66,3,66,93,88);
        }

        //Behaviour of Class To Find last Occurance 
        public function LastOcc()
        {
            $i = 0;

            //Logic To Find lastOccurance
            for($i = $this->isize - 1;$i > 0;$i--)
            {
                if($this->arr[$i] == $this->NO)
                {
                    break;
                }
            }
            
            //Handeling Conditions 
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

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh...<br>";

        //Creating object of Occurance 
        $obj = new Occurance();

        //Call To Behaviour 
        $obj->Accept();
        $iret = $obj->LastOcc();

        //Printing Last Occurance of Entered Number Found 
        printf("Last Occurance of %d number is At index Number %d",$obj->NO,$iret);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main function
    main();
?>