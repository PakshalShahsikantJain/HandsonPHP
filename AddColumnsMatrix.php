<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 04/08/2024
        Program : Write a program which accept matrix and display addition of elements From each
                column  
    */

    //Function to add Columns elements
    function AddColumns($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
        $isum = 0;

        //Logic to add 
        echo "Addition of elements of each columns is as follows : <br>";
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                $isum = $isum + $arr[$j][$i];
            }

            printf("%d &nbsp;&nbsp;",$isum);

            $isum = 0;
        }
    }

    //Main function
    function main()
    {
        $row = 4;
        $col = 4;
        $i = 0;
        $j = 0;

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
    
        //Call to AddColumns function
        AddColumns($arr,$row,$col);
    }

    //Call to main function
    main();
?>