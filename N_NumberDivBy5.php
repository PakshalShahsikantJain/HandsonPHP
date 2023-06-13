<?php
    /*
    Author : Pakshal Shashikant Jain
    Date : 07/06/2023
    Program : Accept N numbers from user and display all such elements which are
              divisible by 5.
              
              Input : N : 6
              Elements : 85 66 3 80 93 88
              Output : 85 80 
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display Elements Which Are Divisible By 5 
    function Divisible($arr,$isize)
    {
        $i = 0;
        
        //Logic To Display ELements Which Are Divisible By 5
        echo "Elements Which are Divisible By 5 are : <br>";    
        for($i = 0;$i < $isize;$i++)
        {
            if(($arr[$i] % 5) == 0)
            {
                echo $arr[$i],"\t";
            }
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $isize = 6;

        //Creating array 
        $arr = array(85,66,3,80,93,88);

        echo "Jay Ganesh...<br>";

        //Call To Divisible Function
        Divisible($arr,$isize);
    }

    ////////////////////////////////////////////////////////////////////////////////////////

    //Call to main Function
    main();
?>