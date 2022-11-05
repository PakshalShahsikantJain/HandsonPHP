<?php
    /*
        Author : Pakshal Jain
        Date : 28/10/2022
        Program : To Accept Number From User and Print odd Numbers Till That Number
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Print OddNumber
    function OddNumbers($No)
    {
        $i = 0;

        //Logic
        echo "Printing OddNumbers Till Entered Number<br>";
        for($i = 1;$i <= $No;$i++)
        {
            if($i % 2 != 0)
            {
                echo $i,"\t";
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $No = 18;

        echo "Jay Ganesh...<br>";
        
        //Call To OddNumbers Function
        OddNumbers($No);
    }

    //Call To Main Function
    main();
?>