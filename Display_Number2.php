<?php
    /*
        Author : Pakshal Jain
        Date : 27/10/2022
        Program : To accept number from user and print numbers till that number
    */
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print Required Pattern
    function Pattern($No)
    {
        $i = 0;
        
        if($No < 0)
        {
            $No = -$No;
        }

        echo "Printing Numbers Till Entered Number<br>";
        for($i = 1;$i <= $No;$i++)
        {
            echo $i,"\t";
        }
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 9;

        echo "Jay Ganesh...<br>";
        
        //Call To Pattern Function
        Pattern($No);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>