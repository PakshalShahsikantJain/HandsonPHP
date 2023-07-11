<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 06/07/2023
    Program : Accept N numbers from user and accept one another number as NO ,
              check whether NO is present or not.

              Input : N : 6
                      NO: 66
                      Elements : 85 66 3 66 93 88
              Output : TRUE

              Input : N : 6
                      NO: 12
                      Elements : 85 11 3 15 11 111
              Output : FALSE 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Class Declaration
    class Check
    {
        //Characteritsics of Class
        public $isize;
        public $arr;
        public $NO;

        //Constructor of Class
        public function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
            $this->NO = 0;
        }

        //Behaviour of Class To Take Input from user
        public function Accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,25,93,78,12);
            $this->NO = 11;
        }

        //Behaviour of Class To Check
        public function Check()
        {
            $i = 0;

            //Logic TO Check
            for($i = 0;$i < $this->isize - 6;$i++)
            {
                if($this->arr[$i] == $this->NO)
                {
                    break;
                }
            }

            //Haneling Conditions
            if($this->arr[$i] == $this->NO)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $bret = false;

        echo "Jay ganesh...<br>";

        //Creating object of Check Class 
        $cobj = new Check();

        //Call To behaviours of Class
        $cobj->Accept();
        $bret = $cobj->Check();
        
        //Handeling Conditions according To Return value 
        if($bret == true)
        {
            echo "Entered Number &nbsp;",$cobj->NO,"&nbsp;is Present in Entered N Numbers";
        }
        else
        {
            echo "Entered Number &nbsp;",$cobj->NO,"&nbsp;is Not Present in Entered N Numbers";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>