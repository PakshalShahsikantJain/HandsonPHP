<?php 
    /*
        Author : Pakshal Shashikant Jain 
        Date : 26/05/2024
        Program : Write a program which accepts file name from user and count number of
                white spaces from that file.

                Input : Demo.txt
                Output : Number of white spaces are 13 
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function CountWhiteSpace Characters From File
    function CountWhiteSpace($fname) 
    {
        //Opening File in Read Mode
        $fd = fopen($fname,'r');
        $arr = [];
        $i = 0;
        $icnt = 0;

        if($fd == false)
        {
            echo "Unable To Open File";
            return -1;
        }
        else 
        {
            printf("File Successfully Opened With File Descriptor : %d",$fd);
        }

        //Reading Data From File and Storing it in Local Array 
        $ret = fread($fd,filesize($fname));
        $arr = str_split($ret);

        if($ret == false) 
        {
            echo "Unable To Read File";

            return -1;
        }
        else 
        {
            //Count Number of WhiteSpace Characters From File 
            for($i = 0;$i < sizeof($arr);$i++)
            {
                if($arr[$i] == ' ')
                {
                    $icnt++;
                }
            }
        }

        //Closing File 
        fclose($fd);

        //Returning Count of WhiteSpace Characters
        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $fname = "Demo.txt";
        $iret = 0;

        echo "Jay Ganesh......<br>";
    
        //Call To CountWhiteSpace Function
        $iret = CountWhiteSpace($fname);

        //Printing Count of WhiteSpace Characters
        echo "<br>Count of WhiteSpace Characters From File is : ",$iret;
    }

    //Call To Main Function
    main();
?>
