<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 05/10/2023
        Program : Input : "Marvellous"
                  Output : M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                           M A R V E L L O U S
                        
                  Input : "PPA"
                  Output : P P A
                           P P A
                           P P A 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Print Given Pattern
    function Pattern($arr)
    {
        $i = 0;
        $j = 0;
        $ascii = 0;

        if($arr == null)
        {
            return;
        }

        //Priting Below Given Pattern
        echo "Printing Below Given Pattern :<br>";
        for($i = 0;$i < sizeof($arr);$i++)
        {
            for($j = 0;$j < sizeof($arr);$j++)
            {
                if(($arr[$j] >= 'a')&&($arr[$j] <= 'z'))
                {
                    $ascii = ord($arr[$j]) - 32;
                    $arr[$j] = chr($ascii);
                }
                printf("%s &nbsp;&nbsp;",$arr[$j]);
            }
            echo "<br>";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $str = "Marvellous";
        $arr = str_split($str);

        echo "Jay Ganesh....<br>";

        //Call To Pattern Function
        Pattern($arr);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>