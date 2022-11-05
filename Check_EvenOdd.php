<?php
    /*
        Author : Pakshal Jain
        Date : 19/09/2022
        Program : To Check Whether Entered Number is Even or Not
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check Entered Number is Even or Not
    function Check($No)
    {
        if($No % 2 == 0)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function main()
    {
        $No = 46;
        $bret = false;

        echo "Jay Ganesh....<br>";
        //Call To Check Function 
        $bret = Check($No);

        if($bret == true)
        {
            echo "Entered Number is Even";
        }
        else
        {
            echo "Entered Number is Odd";
        }
    }  
    //Call To main Function
    main();
?>