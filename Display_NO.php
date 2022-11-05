<?php
    /*
        Author : Pakshal Jain
        Date : 18/09/2022
        Program : To display first number in second number of times
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function Display($No,$No2)
    {
        $i = 0;

        if($No2 <  0)
        {
            $No2 = -$No2;
        }
        for($i = 0;$i < $No2;$i++)
        {
            echo $No," ";
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function main() 
    {
        $No = -12;
        $No2 = -5;

        echo "Ganapati Bappa Morya Mangal Murti Morya....<br>";
        //Call To Display Function
        Display($No,$No2);
    }

    main();
?>