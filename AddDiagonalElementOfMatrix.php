<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 01/08/2024
        Program : Write a program which accept matrix from user and return addition of diagonal
                elements.
    */

    //Function to add diagonal elements
    function AddDiagonal($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
        $isum = 0;

        //Logic to add 
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                if($i == $j)
                {
                    $isum = $isum + $arr[$i][$j];
                }
            }
        }

        //Returning addition of diagonal elements
        return $isum;
    }

    //Main function
    function main()
    {
        $row = 3;
        $col = 3;
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
                printf("%d &nbsp;&nbsp;",$arr[$i][$j]);
            }
            echo "<br>";
        }
    
        //Call to AddDigonal function
        $iret = AddDiagonal($arr,$row,$col);

        //Printing addition of diagonal elements of matrix
        printf("Addition of diagonal elements matrix is : %d",$iret);
    }

    //Call to main function
    main();
?>