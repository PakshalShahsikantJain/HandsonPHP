<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 31/07/2023
        Program : Accept character from user. If character is small display its
                    corresponding capital character, and if it small then display its
                    corresponding capital. In other cases display as it is.

                    Input : Q
                    Output : q

                    Input : m
                    Output : M

                    Input : 4        
                    Output : 4

                    Input : %
                    Output : % 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Fuction To Convert 
    function Convert($ch)
    {
        $ascii = 0;

        //Logic 
        if(($ch >= 'A')&&($ch <= 'Z'))
        {
            $ascii = ord($ch) + 32;

            return chr($ascii);
        }
        else if(($ch >= 'a')&&($ch <= 'z'))
        {
            $ascii = ord($ch) - 32;

            return chr($ascii);
        }
        else
        {
            return $ch;
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        $ch = 'J';
        $cret = ' ';

        echo "Jay Ganesh....<br>";
        
        //Call To Convert Function
        $cret = Convert($ch);

        if(($ch >= 'A')&&($ch <= 'Z'))
        {
            printf("Corresponding Small Character of Entered Capital Letter %s is : %s",$ch,$cret);
        }
        else if(($ch >= 'a')&&($ch <= 'z')) 
        {
            printf("Corresponding Capital Character of Entered Small Letter %s is : %s",$ch,$cret);
        }
        else
        {
            printf("Theres is No Corresponding Letter of Entered Character %s",$ch);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main function
    main();
?>