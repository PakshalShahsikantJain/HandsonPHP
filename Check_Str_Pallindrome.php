<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 21/09/2023
        Program : Accept string from user and check whether the string is palindrome    
                or not without considering its case.

                Input : "1abccBA1"
                Output : TRUE
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Check String is Pallindrome or not
    function StrPallindrome($arr)
    {
        $first = 0;
        $last = 0;
        $ascii = 0;

        //Logic to Check String is Pallindrome or Not
        while($last != sizeof($arr))
        {
            $last++;
        }

        $last--;

        while($first <= $last)
        {
            if(($arr[$first] >= 'A')&&($arr[$first] <= 'Z'))
            {
                $ascii = ord($arr[$first]) + 32;
                $arr[$first] = chr($ascii);
            }

            if($first != $last)
            {
                if(($arr[$last] >= 'A')&&($arr[$last] <= 'Z'))
                {
                    $ascii = ord($arr[$last]) + 32;
                    $arr[$last] = chr($ascii);
                }                    
            }

            if($arr[$first] != $arr[$last])
            {
                break;
            }

            $first++;
            $last--;
        }

        if($arr[$first] != $arr[$last])
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function  main() 
    {
        $bret = false;
        $str = "1abccBA1";
        $arr = [];

        echo "Jay Ganesh....<br>";
        
        $arr = str_split($str);
        
        //Call To StrPallindrome Function
        $bret = StrPallindrome($arr);

        //Handeling Conditions if bret is True
        if($bret == true)
        {
            echo "String is Pallindrome";
        }
        else
        {
            echo "String is Not Pallindrome";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>