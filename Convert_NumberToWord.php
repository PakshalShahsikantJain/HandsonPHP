<?php
    /*
        Author : Pakshal Jain
        Date : 22/10/2022
        Program : To Convert Entered Single Digit Number To Word
    */
    
    ///////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Convert Number To Word
    function Convert($No)
    {
        //Handeling Condition if Entered Number is Negative
        if($No < 0)
        {
            $No = -$No;
        }
        
        //Logic
        switch($No)
        {
            case 1 :
                echo "One";
                break;
            case 2 :
                echo "Two";
                break;
            case 3 :
                echo "Three";
                break;
            case 4 :
                echo "Four";
                break;
            case 5 :
                echo "Five";
                break;
            case 6 :
                echo "Six";
                break;
            case 7 :
                echo "Seven";
                break;
            case 8 :
                echo "Eight";
                break;
            case 9 :
                echo "Nine";
                break;
            default :
                echo "Invalid Number";
                break;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////
    
    //Main Function
    function main()
    {
        $No = 8;
        
        echo "Jay Ganesh...<br>";

        //Call To Convert Function
        Convert($No);
    }

    //Call To main Function
    main();
?>