<?php
    /*
        Author : Pakshal Shashikant Jain 
        Date : 20/05/2024
        Program : Write application which accept file name from user and one string from user. Write
                that string at the end of file.

                Input : Demo.txt
                        Hello World

                Output : Write Hello World at the end of Demo.txt file 
    */

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function Append Data At End of File
    function AppendFile($fname,$data) 
    {
        //Opening File in Append Mode
        $fd = fopen($fname,'a');

        if($fd == -1)
        {
            echo "Unable To Open File";
        }
        else 
        {
            printf("File Successfully Opened With File Descriptor : %d<br>",$fd);
        }

        //Writing Data into File
        $ret = fwrite($fd,$data);

        if($ret == 0)
        { 
            echo "Unable To Append Data into File";
        }
        else 
        {
            printf("%d Bytes of Data Have Been Successfully Written into File",$ret);
        }

        //Closing Opened File
        fclose($fd);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $name = "Demo.txt";
        $data = "  Pakshal Shashikant Jain";

        echo "Jay Ganesh.....<br>";
        
        //Call To AppendFile Function
        AppendFile($name,$data);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Call To Main Function
    main();
?>