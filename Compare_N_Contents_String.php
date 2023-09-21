<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 15/09/2023
        Program : Write a program which 2 strings from user and check whether first
                N contents of two strings are equal or not. (Implement strcmp()
                function).

                Input : "Marvellous Infosystems"
                        "Marvellous Logic Building"
                        10
                Output : TRUE
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Compare Two String
    function StrNCmpX($arr,$brr,$icnt)
    {
        $i = 0;
        $j = 0;

        if(($arr == null)&&($brr == null))
        {
            return false;
        }

        //Logic To Compare
        while((($i != sizeof($arr))&&($j != sizeof($brr)))&& $icnt != 0)
        {
            if($arr[$i] != $brr[$j])
            {
                break;
            }
            $i++;
            $j++;
            $icnt--;
        }

        if($arr[$i] != $brr[$j])
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $bret = false;
        $arr = [];
        $brr = [];
        $str = "Pakshal Jain";
        $str2 = "PakUhal Programmer";
        $icnt = 7;

        echo "Jay Ganesh....<br>";
    
        $arr = str_split($str);
        $brr = str_split($str2);

        //Call To StrNCmpX Function
        $bret = StrNCmpX($arr,$brr,$icnt);

        //Handeling Conditions if bret is true
        if($bret == true)
        {
            echo "First N Contents of String are Equal";
        }
        //Handelgin Conditions if bret is false
        else
        {
            echo "First N Contents of String are Not Eqaul";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>