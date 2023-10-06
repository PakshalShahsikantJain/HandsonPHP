<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 05/10/2023
        Program : Input : "Marvellous"
                  Output : 
                    M
                    M a
                    M a r
                    M a r v
                    M a r v e
                    M a r v e l
                    M a r v e l l
                    M a r v e l l o
                    M a r v e l l o u
                    M a r v e l l o u s

                    Input : “PPA”
                    Output : 
                    P
                    P P
                    P P A 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Print Given Pattern
    function Pattern($arr)
    {
        $i = 0;
        $j = 0;

        if($arr == null)
        {
            return;
        }

        //Logic To print Given Pattern
        for($i = 0;$i < sizeof($arr);$i++)
        {
            for($j = 0;$j < sizeof($arr);$j++)
            {
                if($i >= $j)
                {
                    printf("%s &nbsp;&nbsp;",$arr[$j]);
                }
            }
            echo"<br>";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $str = "Marvellous";
        $arr = str_split($str);
    
        echo "Jay Ganesh....<br>";

        //Call To Pattern Function
        Pattern($arr);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>