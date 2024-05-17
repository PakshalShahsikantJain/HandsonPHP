<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 17/05/2024
        Program : Write application which accept file name from user and create that file.
                
                Input : Demo.txt
                Output : File created successfully. 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Create File
    function CreateFile($fileName) 
    {
        // Creating File
        $file = fopen($fileName,'w');

        if ($file == false) 
        {
            echo "Unable To Create File";
        } 
        else 
        {
            echo "File Suceessfully Created";

            // Close the file
            fclose($file);
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $fileName = 'Demo5.txt';

        //Call To CreateFile Function
        CreateFile($fileName);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>