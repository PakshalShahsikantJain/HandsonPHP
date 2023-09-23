<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 23/09/2023
        Program : Write a program which accept string from user and return length of
                largest word.

                Input : "Marvellous Multi OS Infosystems"
                Output : 11
    */

    //Function To Find Length of Largest Word
    function MaxWordLen($arr)
    {
        $i = 0;
        $icnt = 0;
        $iMax = 0;

        //Logic To Find
        if($arr == null)
        {
            return -1;
        }
        while($i != sizeof($arr))
        {
            if($arr[$i] == ' ')
            {
                while(($arr[$i] == ' ')&&($i != sizeof($arr)))
                {
                    $i++;
                }
                $icnt = 0;
            }
            else
            {
                $icnt++;
                if($icnt > $iMax)
                {
                    $iMax = $icnt;
                }
                $i++;
            }
        }

        return $iMax;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $iret = 0;
        $str = "Marvellous Multi OS Infosystems";
        $arr = [];

        echo "Jay Ganesh.....<br>";
        
        //Creating Character Array of Entered String
        $arr = str_split($str);

        //Call To MaxWordLen Function
        $iret = MaxWordLen($arr);

        //Printing Length of Largest Word
        echo "Length of Largest Word from Entered String is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call TO Main Function
    main();
?>