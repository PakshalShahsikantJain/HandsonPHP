<?php 
    /*
        Author : Pakshal Shashikant Jain 
        Date : 25/05/2024
        Program : Write a program which accepts file name from user and count number of
                Small characters from that file.

                Input : Demo.txt
                Output : Number of Small characters are 23
    */

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function CountSmall Characters From File
    function CountSmall($fname) 
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
            //Count Number of Small Characters From File 
            for($i = 0;$i < sizeof($arr);$i++)
            {
                if(($arr[$i] >= 'a')&&($arr[$i] <= 'z'))
                {
                    $icnt++;
                }
            }
        }

        //Closing File 
        fclose($fd);

        //Returning Count of Small Characters
        return $icnt;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $fname = "CountSmallChar_FromFile.php";
        $iret = 0;

        echo "Jay Ganesh......<br>";
    
        //Call To CountSmall Function
        $iret = CountSmall($fname);

        //Printing Count of Small Characters
        echo "<br>Count of Small Characters From File is : ",$iret;
    }

    //Call To Main Function
    main();
?>
