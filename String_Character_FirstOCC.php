<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 20/08/2023
        Program : Write a program which accept string from user and accept one
                character. Return index of first occurrence of that character.
                Input : "Marvellous Multi OS"
                        'M'
                Output : 0
                Input : "Marvellous Multi OS"
                        'W'
                Output : -1

                Input : "Marvellous Multi OS"
                        'e'
                Output : 4  
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Find First Occurance
    function FirstOcc($arr,$ch)
    {
        $i = 0;

        if($arr == null)
        {
            return -1;
        }

        //Logic To Find First Occurance of Entered Character
        while($i != sizeof($arr) - 1)
        {
            if($arr[$i] == $ch)
            {
                break;
            }
            $i++;
        }

        if($arr[$i] == $ch)
        {
            return $i;
        }
        else
        {
            return -1;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $str = "Marvellous Multi OS";
        $arr = str_split($str);
        $iret = 0;
        $ch = 'W';

        echo "Jay Ganesh....<br>";
        
        //Call To FirstOcc Function
        $iret = FirstOcc($arr,$ch);

        //Printing First Occurance Found of Entered Character
        printf("First Occurance of Character %s is At index number : %d",$ch,$iret);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>