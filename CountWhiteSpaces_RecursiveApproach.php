<?php
   /*
        Author : Pakshal Shashikant Jain 
        Date : 9/5/2024
        Program : Write a recursive program which accept string from user and count white
                spaces.

                Input : HE llo WOr lD
                Output : 3  
    */

    /////////////
    //Function To Coutn WhiteSpaces in Entered String
    function WhiteSpace($arr) 
    {
        static $i = 0;
        static $icnt = 0;
        
        if($i != sizeof($arr))
        {
            if($arr[$i] == ' ')
            {
                $icnt++;
            }
            $i++;

            //Recursive Call To WhiteSpace Function
            WhiteSpace($arr);
        }

        return $icnt;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main() 
    {
        $str = "HE llo WOr lD";
        $arr = str_split($str);
        $iret = 0;

        printf("Jay Ganesh.....<br>");

        //Call To WhiteSpace Function
        $iret = WhiteSpace($arr);

        //Printing White Space Calculated
        printf("Count of White Space in Entered String is '%s' is : %d",$str,$iret);

        return 0;
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Call To Main Function
    main();
?>



