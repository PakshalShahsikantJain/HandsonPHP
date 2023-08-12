<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 08/08/2023
        Program : Write a program which accept string from user and return
                difference between frequency of small characters and frequency of
                capital characters.

                Input : "MarvellouS"
                Output : 6 (8-2) 
    */
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Caculate Difference
    function Difference($str)
    {
        $i = 0;
        $idiff = 0;
        $icnt = 0;
        $icnt2 = 0;
        $arr = [];

        //Converting String To Character Array 
        $arr = str_split($str);

        //Logic To Find Difference
        for($i = 0;$i < sizeof($arr);$i++)
        {
            if(($arr[$i] >= 'A')&&($arr[$i] <= 'Z'))
            {
                $icnt++;
            }
            else if(($arr[$i] >= 'a')&&($arr[$i] <= 'z'))
            {
                $icnt2++;
            }
        }

        $idiff = $icnt2 - $icnt;

        return $idiff;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;
        $str = "MarvellouS";

        echo "Jay Ganesh.....<br>";
        
        //Call To Difference Function
        $iret = Difference($str);   

        //Printing Difference Calculated
        echo "Difference Between Small and Capital Letters is : ",$iret;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call to Main Function
    main();
?>