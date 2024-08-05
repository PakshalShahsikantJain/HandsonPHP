<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 05/08/2024
        Program : Write a program which accept matrix and swap the contents of consecutive rows.  
    */

    //Function to swap rows
    function SwapRows($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
        $temp = 0;

        //Logic to swap 
        for($i = 0;$i < $row;$i += 2)
        {
            for($j = 0;$j < $col;$j++)
            {
                $temp = $arr[$i][$j];
                $arr[$i][$j] = $arr[$i + 1][$j];
                $arr[$i + 1][$j] = $temp;
            }
        }

        echo "Matrix after swapping rows is as follows : <br>";
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                printf("%d &nbsp;&nbsp",$arr[$i][$j]);
            }
            echo "<br>";
        }
    }

    //Main function
    function main()
    {
        $row = 4;
        $col = 4;
        $i = 0;
        $j = 0;
        $iret = 0;

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
                printf("%d &nbsp;&nbsp",$arr[$i][$j]);
            }
            echo "<br>";
        }
    
        //Call to SwapRows
        SwapRows($arr,$row,$col);
    }

    //Call to main function
    main();
?>