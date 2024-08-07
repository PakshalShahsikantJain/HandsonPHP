<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 7/08/2024
        Program : Write a program which accept matrix and reverse the contents of each row. 
    */

    //Function to Reverse each row of the matrix 
    function ReverseRow($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
      
        //Logic to Reverse each row of the matrix 
        echo "Updated matrix is as follows : <br>";
        for($i = 0;$i < $row;$i++)
        {
            for($j = $col - 1;$j > -1;$j--)
            {
                printf("%d &nbsp;&nbsp;",$arr[$j][$i]);
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
    
        //Call to ReverseRow function
        ReverseRow($arr,$row,$col);
    }

    //Call to main function
    main();
?>