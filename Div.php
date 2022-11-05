<?php
    /*
        Author : Pakshal Jain
        Date : 04/09/2022
        Program : To Find Division of Two Numbers
    */
    function Divsion($No,$No2) 
    {
        $ans = 0;
        if($No2 == 0)
        {
            echo "Invalid Input...<br>";
            return 0;
        }
        else if($No2 < 0) 
        {
            $No2 = -$No2;
        }
        $ans = $No / $No2;

        return $ans;
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function main() 
    {
        echo "Jay Ganesh.....<br>";
        $no = 45;
        $no2 = -12;
        $ret = 0;

        $ret = Divsion($no,$no2);
        echo "Division of Two Numbers is : <br>",$ret;
    }

    main();
?>