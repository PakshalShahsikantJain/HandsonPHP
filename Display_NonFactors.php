<?php
    /*
        Author : Pakshal Jain
        Date : 04/10/2022
        Program : To Print NonFactors of Entered Number
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Find Nonfactors of Entered number
    function NonFact($No)
    {
        $i = 0;

        echo "Nonfactors of Entered Number is as Follows :<br>";
        for($i = 1;$i < $No;$i++)
        {
            if($No % $i != 0)
            {
                echo $i," ";
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $no = 12;

        echo "Jay Ganesh....<br>";

        //Call To Nonfact Function
        NonFact($no);
    }

    //Call To Main Function
    main();
?>