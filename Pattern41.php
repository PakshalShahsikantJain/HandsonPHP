<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 07/10/2023
        Program : Write a program which accept string from user and print below pattern.
        
                Input : "Marvellous"
                Output : m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
                         m a r v e l l o u s
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
                if(($arr[$j] >= 'A')&&($arr[$j] <= 'Z'))
                {
                    $ascii = ord($arr[$j]) + 32;
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