<?php
    /*
        Author : Pakshal Shashiaknt Jain
        Date : 13/05/2024
        Program : Write a recursive program which accept string from user and count number of small characters.
                
                Input : HElloWOrlD
                Output : 5
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Count Small Characters
    function Small($str) 
    {
        static $i = 0;
        static $icnt = 0;

        //Creating Character Array
        $arr = str_split($str);

        //Logic To Count
        if($i != sizeof($arr)) 
        {
            if(($arr[$i] >= 'a')&&($arr[$i] <= 'z'))
            {
                $icnt++;
            }
            $i++;

            Small($str);
        }

        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $str = "Sneha Nair";
        $iret = 0;

        echo "Jay Ganesh.....<br>";
        
        //Call To Small Function
        $iret = Small($str);

        //Printing Count 
        printf("Count of Small Characters From String '%s' is : %d",$str,$iret);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>