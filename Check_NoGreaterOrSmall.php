<?php
    /*  
        Author : Pakshal Jain
        Date : 09/10/2022
        Program : To Check Entered Number is Greater Than 100 or Not
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check
    function Check($No)
    {
        if($No > 100)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 102;
        $bret = false;

        echo "Jay Ganesh....<br>";
        
        //Check Function
        $bret = Check($No);

        if($bret == true)
        {
            echo "Entered Number is Greater Than 100";
        }
        else 
        {
            echo "Entered Number is less Than 100";
        }
    }
    
    //Call To Main Function
    main();
?>