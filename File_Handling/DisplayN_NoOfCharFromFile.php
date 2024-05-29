<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 28/05/2024
        Program : Write a program which accepts file name and one count from user and read
                  that number of characters from starting position.

                    Input : Demo.txt 12
                    Output : Display first 12 characters from Demo.txt 
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Display N Number of Characters From File
    function DisplayN($fname,$isize)
    {
        //Opening File in Read Mode 
        $fd = fopen($fname,'r');

        if($fd == false)
        {
            echo "Unable to Open File <br>";

            return;
        }
        else 
        {
            echo "File Successfully Opened With File Descriptor : ",$fd;
        }

        //Reading First N Number of Characters From File
        $data = fread($fd,$isize);  
        if($data == null)
        {
            echo "Unable To Read File";
        }
        else
        {
            //Printing N Number of Characters From File 
            echo "<br>File Readed Successfully<br>";
            echo "Data From File is : <br>";
            echo $data;
        }
        
        //Closing File After Performing All Operations
        fclose($fd);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $fname = "Demo5.txt";
        $ino = 50;

        echo "Jay Ganesh....<br>";
    
        //Call To DisplayN Function
        DisplayN($fname,$ino);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>