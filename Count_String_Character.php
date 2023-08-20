<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 19/08/2023
        Program : Write a program which accept string from user and accept one
                character. Return frequency of that character.
                
                Input : “Marvellous Multi OS”
                        M
                Output : 2

                Input : “Marvellous Multi OS”
                        W
                Output : 0 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Count Frequecny of Character
    function CharCount($arr,$ch) 
    {
        $i = 0;
        $icnt = 0;
        
        //Logic To Count
        while($i != sizeof($arr))
        {
            if($arr[$i] == $ch)
            {
                $icnt++;        
            }

            $i++;
        }

        return $icnt;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main()
    {
        $str = "Marvellous Multi OS";
        $arr = str_split($str);
        $ch = 'l';
        $iret = 0;

        echo "Jay ganesh....<br>";
        
        //Call To Count function
        $iret = CharCount($arr,$ch);
        
        //Printing Count Calculated
        echo "Count of Entered Character in Entered String is : ",$iret;
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>