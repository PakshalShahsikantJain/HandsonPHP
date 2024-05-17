<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 16/05/2024
        Program : Write application which accept file name from user and open that file in read mode.

                Input : Demo.txt
                Output : File opened successfully. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Open File In Read Mode
    function OpenFile($fileName) 
    {
        // Open the file in read mode
        $file = fopen($fileName, 'r');

        if ($file == false) 
        {
            echo "Error opening file.";
        } 
        else 
        {
            echo "File Opened Successfully, File content:\n";

            // Read the file content
            while (($line = fgets($file)) !== false) 
            {
                echo $line;
            }

            // Close the file
            fclose($file);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $fileName = 'Demo.txt';

        //Call To OpenFile Function
        OpenFile($fileName);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>