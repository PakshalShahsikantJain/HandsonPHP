<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 27/05/2024
        Program : Write a program which accepts file name and one character from user and
                count number of occurrences of that characters from that file.

                Input : Demo.txt ‘M’
                Output : Frequency of M is 7 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Count Entered Character From File 
    function CountChar($fname,$ch)
    {
        $fd = 0;
        $sret = " ";
        $icnt = 0;
        
        //Opening File in Read Mode 
        $fd = fopen($fname,'r');
        if($fd == false)
        {
            echo "Unable To Open File : ";
        }
        else 
        {
            printf("File Successfully Opned With File Descriptor : %d",$fd);
        }

        //Reading File in and Storing Data in Local Array 
        $sret = fread($fd,filesize($fname));

        $arr = str_split($sret);

        //Counting Character From File 
        for($i = 0;$i < sizeof($arr);$i++) 
        {
            if($arr[$i] == $ch)
            {
                $icnt++;
            }
        }

        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $fname = "CountChar_FromFile.php";
        $ch = "D";
        $iret = 0;

        echo "Jay Ganesh....<br>";
    
        //Call To Count Char Function
        $iret = CountChar($fname,$ch);

        //Printing Count of Character From File 
        echo "<br>Count of Char From File is : ",$iret;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>