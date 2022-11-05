<?php
    /*
        Author : Pakshal Jain
        Date : 10/10/2022
        Program : To Check Entered Two Numbers are Equal or Not
    */

    //Function To Check
    function Check($No,$No2)
    {
        if($No == $No2)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function main()
    {
        $No = 10;
        $No2 = 10;

        $bret = false;

        echo "Jay Ganesh...<br>";
        
        //Call To Check Function
        $bret = Check($No,$No2);

        if($bret == true)
        {
            echo "Entered Numbers are Equal";
        }
        else 
        {
            echo "Entered Number are Not Equal";
        }
    }

    //Call To main Function
    main();
?>