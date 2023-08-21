<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 21/08/2023
        Program : Write a program which accept string from user reverse that string
                in place.

                Input : “abcd”
                Output : “dcba”

                Input : “abba”
                Output : “abba” 
    */

    //Function To Reverse String 
    function Reverse($arr) 
    {
        $iStart = 0;
        $iEnd = 0;
        $temp = ' ';

        //Logic To Reverse String 
        while($iEnd != sizeof($arr) - 1)
        {
            $iEnd++;
        }

        while($iStart < $iEnd)
        {
            $temp = $arr[$iStart];
            $arr[$iStart] = $arr[$iEnd];
            $arr[$iEnd] = $temp;

            $iStart++;
            $iEnd--;
        }

        return implode("",$arr);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $str = "abcd";
        $arr = [];
        $sret = " ";

        echo "Jay Ganesh.....<br>";
        
        $arr = str_split($str);

        //Call To Reverse String 
        $sret = Reverse($arr);

        echo "Reversed String is : ",$sret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>