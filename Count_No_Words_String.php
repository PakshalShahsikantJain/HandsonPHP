<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 22/09/2023
        Program : Write a program which accept string from user count number of
                words from string
                
                Input : "Marvellous Multi OS"
                Output : 3
                
                Input : "              Marvellous                  Multi           OS             Pune"
                Output : 4 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Count Number of Words
    function WordCount($arr)
    {
        $i = 0;
        $icnt = 1;

        if($arr[$i] == ' ')
        {
            while($arr[$i] == ' ')
            {
                $i++;
            }
        }

        //Logic To Count
        while($i != sizeof($arr))
        {
            if($arr[$i] == ' ')
            {
                while(($arr[$i] == ' ')&&($i != sizeof($arr)))
                {
                    $i++;                   
                }
                $icnt++;
            }

            $i++;
        }

        return $icnt;
    }   

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $iret = 0;
        $str = "     Marvellous         Multi          OS        Pune";
        $arr = [];

        echo "Jay Ganesh....<br>";
        
        //Creating Character Array of Entered String
        $arr = str_split($str);

        //Call To WordCount function
        $iret = WordCount($arr);

        //Printing Count Of Words
        echo "Count of Word in Entered String is : ",$iret;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>