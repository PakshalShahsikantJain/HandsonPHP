<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 5/08/2024
        Program : Write a program which accept matrix from user and display transpose of the
                matrix.

                The transpose of a given matrix is formed by interchanging the rows and
                columns of a matrix. 
    */

    //Function to Display transpose of Matrix
    function TransposeMatrix($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
      
        //Logic to Display transpose of matrix 
        echo "Transpose of matrix is as follows : <br>";
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
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
    
        //Call to TransposeMatrix function
        TransposeMatrix($arr,$row,$col);
    }

    //Call to main function
    main();
?>