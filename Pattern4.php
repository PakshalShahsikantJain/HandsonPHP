<?php
    /*
        Author : Pakshal Jain
        Date : 18/01/2023
        Program : Accept number from user and display below pattern.
        
        Input : 5
        Output : A B C D E
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Given Pattern
    function Pattern($No) 
    {
        $i = 0;
        $Sum = 0;
        
        echo "Printing Given Pattern<br>";
        
        //Logic To Print Given Pattern
        for($i = 0;$i < $No;$i++)
        {
            $Sum = $i + 65;

            printf("%c\t",$Sum);
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main() 
    {
        $No = 5;

        echo "Jay Ganesh....<br>";
        
        //Call To Pattern Function
        Pattern($No);
    }

    //Main Function
    main();
?>