<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 09/08/2023
        Program : Write a program which accept string from user and check whether
                it contains vowels in it or not.

                Input : "marvellous"
                Output : TRUE

                Input : "Demo"
                Output : TRUE

                Input : "xyz"
                Output : FALSE  
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function Check 
    function Check($arr) 
    {
        //Local Variables
        $i = 0;
        $ascii = 0;

        //Logic To Check String Contains Vowels or not
        for($i = 0;$i < sizeof($arr) - 1;$i++)
        {
            if(($arr[$i] >= 'A')&&($arr[$i] <= 'Z'))
            {
                $ascii = ord($arr[$i]) + 32;
                $arr[$i] = chr($ascii);
            }            

            if(($arr[$i] == 'a')||($arr[$i] == 'e')||($arr[$i] == 'i')||($arr[$i] == 'o')||($arr[$i] == 'u'))
            {
                break;
            }
        }

        if(($arr[$i] == 'a')||($arr[$i] == 'e')||($arr[$i] == 'i')||($arr[$i] == 'o')||($arr[$i] == 'u'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $str = "XYZ";
        $bret = false;

        $arr = [];
        $arr = str_split($str);

        echo "Jay Ganesh....<br>";
        
        //Call To Check Function
        $bret = Check($arr);

        //Handling Conditions According To Ouput 
        if($bret == true)
        {
            echo "String Contains Vowels";
        }
        else
        {
            echo "String Does Not Contains Vowels";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>