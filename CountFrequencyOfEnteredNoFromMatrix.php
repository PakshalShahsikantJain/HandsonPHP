<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 03/08/2024
        Program : Write a program which accept matrix and one number from user and return
                frequency of that number. 
    */

    //Function to count frequency of entered number
    function CountFrequency($arr,$row,$col,$ino)
    {
        $i = 0;
        $j = 0;
        $icnt = 0;

        //Logic to count frequecny of entered number
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                if($arr[$i][$j] == $ino)
                {
                    $icnt++;
                }
            }
        }

        //Returning frequecny of entered no
        return $icnt;
    }

    //Main function
    function main()
    {
        $row = 3;
        $col = 3;
        $icnt = 0;
        $i = 0;
        $j = 0;
        $iret = 0;
        $ino = 12;

        echo "Jay Ganesh....<br>";

        //Allocating memory of array 
        $arr = array();

        for($i = 0;$i < $row;$i++)
        {
            $arr[$i] = array(); 
        }

        //Inserting elements into the array
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                $arr[$i][$j] = $i * $col + $j + 10;
            }
        }

        //Printing elements of matrix
        echo "Elements of Matrix are : <br>";
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                printf("%d &nbsp;&nbsp;",$arr[$i][$j]);
            }
            echo "<br>";
        }
    
        //Call to CountFrequency function
        $iret = CountFrequency($arr,$row,$col,$ino);

        //Printing frequency of entered number
        printf("Frequency of entered no %d is : %d",$ino,$iret);
    }

    //Call to main function
    main();
?>