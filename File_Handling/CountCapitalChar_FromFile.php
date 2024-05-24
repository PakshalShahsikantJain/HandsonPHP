<?php 
    /*
        Author : Pakshal Shashikant Jain 
        Date : 24/05/2024
        Program : Write a program which accepts file name from user and count number of
                capital characters from that file.

                Input : Demo.txt
                Output : Number of capital characters are 23
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function CountCapital Characters From File
    function CountCapital($fname) 
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
            //Count Number of Capital Characters From File 
            for($i = 0;$i < sizeof($arr);$i++)
            {
                if(($arr[$i] >= 'A')&&($arr[$i] <= 'Z'))
                {
                    $icnt++;
                }
            }
        }

        //Closing File 
        fclose($fd);

        //Returning Count of Capital Characters
        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $fname = "CountCapitalChar_FromFile.php";
        $iret = 0;

        echo "Jay Ganesh......<br>";
    
        //Call To CountCapital Function
        $iret = CountCapital($fname);

        //Printing Count of Capital Characters
        echo "<br>Count of Capital Characters From File is : ",$iret;
    }

    //Call To Main Function
    main();
?>
