<?php
    /*
        Author : Pakshal Jain
        Date : 21/10/2022
        Program : To accept number from user and if number is less than 50 then print small, 
                  if it is greater than 50 and less than 100 then print medium, 
                  if it is greater than 100 then print large
    */

    //Fucntion To Print Output
    function Number($No) 
    {
        //Logic
        if($No < 50)
        {
            echo "Small";
        }
        else if(($No >= 50)&&($No <= 100))
        {
            echo "Medium";
        }
        else if($No > 100)
        {
            echo "Large";
        }
    }

    //Main Function
    function main()
    {
        $No = 103;

        echo "Jay ganesh...<br>";
        
        #Call To Number Function
        Number($No);
    }

    //Call To Main Function
    main();
?>
