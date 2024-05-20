<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 19/05/2024
        Program : Write application which accept file name from user and read all data from that file
                and display contents on screen.
                
                Input : Demo.txt
                Output : Display all data of file. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Open File In Read Mode
    function Read($fileName) 
    {
        // Open the file in read mode
        $file = fopen($fileName, 'r');

        if ($file == false) 
        {
            echo "Error opening file.";
        } 
        else 
        {
            echo "File Opened Successfully, File content: <br>";

            //Reading Whole File (Single Line At a Time)
            while(!feof($file)) //Read Till End of The File
            {
                echo fgets($file)."<br>";
            }

            printf("Size of File in Bytes is : %d bytes",filesize($fileName));  

            // Close the file
            fclose($file);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $fileName = 'ReadFile.php';

        echo "Jay Ganesh....<br>";
        
        //Call To OpenFile Function
        Read($fileName);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>