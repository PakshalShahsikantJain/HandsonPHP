<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 30/06/2023
    Program : Accept N numbers from user check whether that numbers contains 11 in it or not.
              Input : N : 6
                      Elements : 85 66 11 80 93 88
              Output : 11 is present

              Input : N : 6
                      Elements : 85 66 3 80 93 88
              Output : 11 is absent
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Class Declaration
    class Check
    {
        //Characteristics of Class
        public $isize;
        public $arr;

        //Constructor of Class
        function __construct()
        {
            $this->isize = 0;
            $this->arr = [];
        }

        //Behaviour of Class To Take input from user
        function accept()
        {
            $this->isize = 6;
            $this->arr = array(85,66,3,93,88,87);
        }

        //Behaviour of Class To Check
        function check()
        {
            $i = 0;
            
            //Logic 
            for($i;$i < $this->isize - 1;$i++)
            {
                if($this->arr[$i] == 11)
                {
                    break;
                }
            }

            if($this->arr[$i] == 11)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $bret = false;

        echo "Jay Ganesh...<br>";
        
        //Creating object of Check Class
        $cobj = new Check();
        
        //Call To Behaviours of Class
        $cobj->accept();
        $bret = $cobj->check();

        //Handeling Conditions 
        if($bret == true)
        {
            echo "11 is Present in Entered N Numbers";
        }
        else 
        {
            echo "11 is Not Present in Entered N Numbers";
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>