<?php
    /*
        Auhtor : Pakshal Jain
        Date : 15/10/2022
        Program : To Calculate Percentage of Entered Marks
    */

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Function To Calculate Percentage
    function Percentage($No,$No2)
    {
        $ans = 0.0;

        $ans = $No2 / $No * 100;
        
        return $ans;
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Main Function
    function main()
    {
        $No = 600;
        $No2 = 589;
        $fret = 0.0;

        echo "Jay Ganesh....<br>";
        
        //Calling Percentage Function
        $fret = Percentage($No,$No2);   
        
        //Printing Final Ouput
        echo "Percentage is : ",$fret,"%";
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //calling main Function
    main();
?>