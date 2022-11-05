<?php
    /*
        Author : Pakshal Jain
        Date : 28/09/2022
        Program : To Check ENtere number is Character or Not
    */

    //Function TO Check
    function Check($ch)
    {
        //Logic to Check Character is Vowel or Not
        if(($ch == 'a')||($ch == 'e')||($ch == 'i')||($ch == 'o')||($ch == 'u'))
        {
            return true;
        }
        else if(($ch == 'A')||($ch == 'E')||($ch == 'I')||($ch == 'O')||($ch == 'U'))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $ch = 'd';
        $bret = false;

        echo "Jay Ganesh....<br>";
        //Call To Check To Function
        $bret = Check($ch);
        if($bret == true)
        {
            echo "Entered Character is Vowel<br>";
        }
        else 
        {
            echo "Entered Character is Not a Vowel<br>";
        }
    }
    //Call To main Function
    main();
?>