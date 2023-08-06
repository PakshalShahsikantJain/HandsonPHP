<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 05/08/2023
        Program : Accept Character from user and check whether it is special symbol
                or not (!, @, #, $, %, ^, &, *).

                Input : %
                Output : TRUE

                Input : d
                Output : FALSE    
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Check
    function Check($ch)
    {
        //Logic 
        if(($ch >= '#')&&($ch <= '&'))
        {
            return true;
        }
        else if(($ch == '!')||($ch == '@')||($ch == '^')||($ch == '*'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $bret = false;
        $ch = '8';

        echo "Jay Ganesh....<br>";
        
        //Call To Check Function
        $bret = Check($ch);

        //Handeling Condition According To Obtained Output
        if($bret == true)
        {
            printf("Entered Character %s is a Special Symbol",$ch);
        }
        else 
        {
            printf("Entered Character %s is Not a Special Symbol",$ch);
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main function
    main();
?>