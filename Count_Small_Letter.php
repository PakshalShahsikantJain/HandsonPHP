<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 08/08/2023
    Program : Write a program which accept string from user and count number of
              small characters.

              Input : “Marvellous”
              Output : 9  
    */

    //Function To Count Small Letter
    function Count_Small($str) 
    {
        $i = 0;
        $arr = [];
        $icnt = 0;

        //Creating array of Characters of Entered String 
        $arr = str_split($str);

        //Logic To Count
        for($i = 0;$i < sizeof($arr);$i++)
        {
            if(($arr[$i] >= 'a')&&($arr[$i] <= 'z'))
            {
                $icnt++;
            }
        } 

        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";

        $str = "Marvellous Multi OS";

        //Call To Count_Small Function
        $iret = Count_Small($str);

        printf("Count of Small Letter in Entered String (%s) is : %d",$str,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>