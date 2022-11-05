<?php
    /*
        Author : Pakshal Jain
        Date : 24/09/2022
        Program : To Convert Case of Entered Character
    */

    //Funtion To Convert Case

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function Convert($ch)
    {
        $c = '';

        //Logic of Conversion
        if(($ch >= 'A')&&($ch <= 'Z'))
        {
            $c = ord($ch) + 32;
        }
        else if(($ch >= 'a')&&($ch <= 'z'))
        {
            $c = ord($ch) - 32;
        }

        return chr($c);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function main()
    {
        $ch = 'b';
        $cret = ' ';
        echo "Ganapti Bappa Morya<br>";
        
        //Call To Convert Function
        $cret = Convert($ch);
        echo "Convereted Character is :<br>",$cret;
    }   

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    main()
?>