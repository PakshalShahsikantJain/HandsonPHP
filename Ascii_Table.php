<?php
    /*
    Author : Pakshal Shashikant Jain 
    Date : 31/07/2023
    Program : Write a program which displays ASCII table. Table contains symbol,
              Decimal, Hexadecimal and Octal representation of every member from
              0 to 255
    */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //Function To Print Ascii Table 
    function AsciiTable()
    {
        $i = 0;
        
        echo("--------------------------------Ascii Table---------------------------------------------<br>");
        for($i = 0;$i <= 255;$i++)
        {
            printf("%d &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; %x &nbsp;&nbsp;&nbsp;&nbsp;&nbsp %o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; %c <br>",$i,$i,$i,$i);
            printf("<br>");
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main function
    function main() 
    {
        echo "Jay Ganesh......<br>";
        //Call To AsciiTable Function
        AsciiTable();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To main function
    main();
?>