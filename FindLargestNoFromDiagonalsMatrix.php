<?php
    /*
        Author : Pakshal Shashikant Jain
        Date : 04/08/2024
        Program : Write a program which accept matrix and return largest number from both the
                    diagonals 
    */

    //Function to Final largest no from both the diagonals of matrix
    function MaxDiagonal($arr,$row,$col)
    {
        $i = 0;
        $j = 0;
        $imax = 0;

        //Logic to Find largest no from both the diagonals of matrix
        for($i = 0;$i < $row;$i++)
        {
            for($j = 0;$j < $col;$j++)
            {
                if(($i == $j)||($i + $j)==($col - 1))
                {
                    if($arr[$i][$j] > $imax)
                    {
                        $imax = $arr[$i][$j];
                    }
                }
            }
        }

        //Returning largest no from both the diagonals of matrix
        return $imax;
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

        //Allocating memory of Matrix 
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
    
        //Call to MaxDiagonal function
        $iret = MaxDiagonal($arr,$row,$col);

        //Printing Largest no from diagonal of matrix 
        printf("Largest no from both the diagonals of matrix is : %d",$iret);
    }

    //Call to main function
    main();
?>