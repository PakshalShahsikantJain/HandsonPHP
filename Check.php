<?php
    /*
        Author : Pakshal Jain
        Date : 14/09/2022
        Program : To Check Wheter Number is Divisible By 5 or Not
    */

    function Check($No) 
    {
        if($No % 5 == 0)
        {
            return true;
        }
        else 
        {
            return false;
        }
        
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function  main() 
    {
        $No = 5;
        $bret = false;

        echo "Jay Ganesh.....<br>";
        $bret = Check($No);

        if($bret == true)
        {
            echo "Entered Number is Divisible By 5";
        }
        else
        {
            echo "Entered Number is Not Divisible By 5";
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    main()
?>